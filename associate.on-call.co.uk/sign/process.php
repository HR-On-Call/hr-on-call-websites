<?php
/**
 * Agreement Signing Process Handler
 */

require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/ats/config.php';
require_once dirname(__DIR__) . '/ats/includes/Database.php';
require_once dirname(__DIR__) . '/ats/includes/Applicant.php';
require_once dirname(__DIR__) . '/ats/includes/Email.php';

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . SITE_URL);
    exit;
}

// CSRF check removed - agreement token itself is secret (sent via email)
// The token validation below provides security

// Get and validate token
$token = $_POST['token'] ?? '';
$applicantModel = new Applicant();
$validation = $applicantModel->validateAgreementToken($token);

if (!$validation['valid']) {
    $errorMessages = [
        'invalid' => 'This link is invalid.',
        'expired' => 'This link has expired.',
        'already_signed' => 'This agreement has already been signed.'
    ];
    die($errorMessages[$validation['error']] ?? 'An error occurred.');
}

$applicant = $validation['applicant'];

// Validate required fields
$requiredFields = ['business_name', 'address_line_1', 'city', 'postcode', 'signature'];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        die('Please complete all required fields.');
    }
}

// Validate checkboxes
if (empty($_POST['confirm_read']) || empty($_POST['confirm_self_employed']) || empty($_POST['confirm_insurance'])) {
    die('Please confirm all checkboxes.');
}

// Validate signature matches name (case-insensitive)
$signature = trim($_POST['signature']);
if (strtolower($signature) !== strtolower($applicant['full_name'])) {
    die('Your signature must match your name exactly.');
}

// Collect form data
$businessName = trim($_POST['business_name']);
$addressLine1 = trim($_POST['address_line_1']);
$addressLine2 = trim($_POST['address_line_2'] ?? '');
$addressLine3 = trim($_POST['address_line_3'] ?? '');
$addressLine4 = trim($_POST['address_line_4'] ?? '');
$city = trim($_POST['city']);
$postcode = trim($_POST['postcode']);
$companyNumber = trim($_POST['company_number'] ?? '') ?: 'N/A';
$vatNumber = trim($_POST['vat_number'] ?? '') ?: 'N/A';

// Build full address for display (backward compatibility)
$addressParts = array_filter([$addressLine1, $addressLine2, $addressLine3, $addressLine4, $city, $postcode]);
$businessAddress = implode("\n", $addressParts);

// Save agreement fields with Xero-compatible address structure
$agreementFields = [
    'business_name' => $businessName,
    'business_address' => $businessAddress, // Combined for backward compatibility
    'address_line_1' => $addressLine1,
    'address_line_2' => $addressLine2,
    'address_line_3' => $addressLine3,
    'address_line_4' => $addressLine4,
    'city' => $city,
    'postcode' => $postcode,
    'company_number' => $companyNumber,
    'vat_number' => $vatNumber,
    'signature' => $signature,
    'signed_date' => date('Y-m-d H:i:s')
];
$applicantModel->saveAgreementFields($applicant['id'], $agreementFields);

// Generate PDF
require_once dirname(__DIR__) . '/ats/includes/pdf-generator.php';

$pdfData = [
    'applicant' => $applicant,
    'business_name' => $businessName,
    'business_address' => $businessAddress,
    'address_line_1' => $addressLine1,
    'address_line_2' => $addressLine2,
    'address_line_3' => $addressLine3,
    'address_line_4' => $addressLine4,
    'city' => $city,
    'postcode' => $postcode,
    'company_number' => $companyNumber,
    'vat_number' => $vatNumber,
    'signature' => $signature,
    'signed_date' => date('j F Y'),
    'signed_datetime' => date('j F Y \a\t H:i'),
    'ip_address' => $_SERVER['REMOTE_ADDR'],
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];

$pdfGenerator = new AgreementPdfGenerator();
$pdfResult = $pdfGenerator->generate($pdfData);

if (!$pdfResult['success']) {
    error_log('PDF generation failed: ' . ($pdfResult['error'] ?? 'Unknown error'));
    die('An error occurred while generating the agreement. Please try again or contact Grace.');
}

$pdfPath = $pdfResult['path'];
$pdfFilename = $pdfResult['filename'];

// Mark agreement as signed
$applicantModel->markAgreementSigned(
    $applicant['id'],
    $pdfPath,
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
);

// === ASSOCIATE PORTAL INTEGRATION ===
// Create associate account when agreement is signed

// Define portal constants (ATS config already loaded, just add missing ones)
if (!defined('PORTAL_URL')) {
    define('PORTAL_URL', 'https://associate.on-call.co.uk/assignments');
}
if (!defined('PORTAL_ADMIN_URL')) {
    define('PORTAL_ADMIN_URL', PORTAL_URL . '/admin');
}
if (!defined('ADMIN_EMAIL')) {
    define('ADMIN_EMAIL', 'grace@on-call.co.uk');
}
if (!defined('BOOKING_URL')) {
    define('BOOKING_URL', 'https://gp-hr.co.uk/booking');
}

// Database class is already loaded from ATS - don't reload portal version
// Load Associate class from portal (different from ATS Applicant class)
require_once dirname(__DIR__) . '/assignments/includes/classes/Associate.php';
require_once dirname(__DIR__) . '/assignments/includes/classes/PortalEmail.php';

$associate = new Associate();
if (!$associate->emailExists($applicant['email'])) {
    $token = bin2hex(random_bytes(32));
    $result = $associate->create([
        'name' => $applicant['full_name'],
        'email' => $applicant['email'],
        'phone' => $applicant['phone'] ?? '',
        'password_reset_token' => $token,
        'password_reset_expires' => date('Y-m-d H:i:s', strtotime('+48 hours')),
        'status' => 'pending'
    ]);

    if ($result['success']) {
        $associate->load($result['id']);
        $portalEmail = new PortalEmail();
        $portalEmail->sendAccountCreated($associate);
    }
}
// === END ASSOCIATE PORTAL INTEGRATION ===

// Send emails
$emailService = new Email();

// Email to associate with PDF attached
$emailService->sendAgreementSigned($applicant, $pdfPath);

// Email to Grace with PDF attached
$emailService->sendAgreementAdminNotification($applicant, $agreementFields, $pdfPath);

// Redirect to confirmation page with signed data
$confirmSecret = 'hroncall_confirm_2024_key';
$confirmData = base64_encode(json_encode([
    'name' => $applicant['full_name'],
    'email' => $applicant['email'],
    'signed_at' => date('Y-m-d H:i:s')
]));
$confirmHash = hash('sha256', $confirmData . $confirmSecret);

header('Location: ' . SITE_URL . '/sign/confirm.php?d=' . urlencode($confirmData) . '&h=' . urlencode($confirmHash));
exit;
