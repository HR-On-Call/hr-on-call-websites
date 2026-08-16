<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Step 1: Start<br>";

require_once dirname(__DIR__) . '/config.php';
echo "Step 2: config.php loaded<br>";

require_once dirname(__DIR__) . '/ats/config.php';
echo "Step 3: ats/config.php loaded<br>";

require_once dirname(__DIR__) . '/ats/includes/Database.php';
echo "Step 4: Database.php loaded<br>";

require_once dirname(__DIR__) . '/ats/includes/Applicant.php';
echo "Step 5: Applicant.php loaded<br>";

require_once dirname(__DIR__) . '/ats/includes/Email.php';
echo "Step 6: Email.php loaded<br>";

echo "Step 7: Getting POST data<br>";
$token = $_POST['token'] ?? 'NO TOKEN';
echo "Token: " . htmlspecialchars($token) . "<br>";

echo "Step 8: Creating Applicant model<br>";
$applicantModel = new Applicant();

echo "Step 9: Validating token<br>";

// Debug: Check database directly
$db = Database::getInstance();
$dbCheck = $db->fetchOne("SELECT id, full_name, status, agreement_token, agreement_signed_at FROM applicants WHERE agreement_token = ?", [$token]);
echo "DB Check: " . ($dbCheck ? "Found ID {$dbCheck['id']} - {$dbCheck['full_name']} (status: {$dbCheck['status']}, signed: " . ($dbCheck['agreement_signed_at'] ?? 'NULL') . ")" : "NOT FOUND") . "<br>";

$validation = $applicantModel->validateAgreementToken($token);
echo "Valid: " . ($validation['valid'] ? 'yes' : 'no') . "<br>";
if (!$validation['valid']) {
    echo "Error type: " . ($validation['error'] ?? 'unknown') . "<br>";
}

if (!$validation['valid']) {
    die("Token invalid");
}

$applicant = $validation['applicant'];
echo "Step 10: Token valid, applicant: " . $applicant['full_name'] . "<br>";

echo "Step 11: Getting form data<br>";
$signature = trim($_POST['signature'] ?? '');
$businessName = trim($_POST['business_name'] ?? '');
$businessAddress = trim($_POST['business_address'] ?? '');
echo "Business: $businessName<br>";

echo "Step 12: Saving agreement fields<br>";
$agreementFields = [
    'business_name' => $businessName,
    'business_address' => $businessAddress,
    'company_number' => trim($_POST['company_number'] ?? '') ?: 'N/A',
    'vat_number' => trim($_POST['vat_number'] ?? '') ?: 'N/A',
    'signature' => $signature,
    'signed_date' => date('Y-m-d H:i:s')
];
$applicantModel->saveAgreementFields($applicant['id'], $agreementFields);
echo "Agreement fields saved<br>";

echo "Step 13: Loading PDF generator<br>";
require_once dirname(__DIR__) . '/ats/includes/pdf-generator.php';
echo "PDF generator loaded<br>";

echo "Step 14: Generating PDF<br>";
$pdfData = [
    'applicant' => $applicant,
    'business_name' => $businessName,
    'business_address' => $businessAddress,
    'company_number' => $agreementFields['company_number'],
    'vat_number' => $agreementFields['vat_number'],
    'signature' => $signature,
    'signed_date' => date('j F Y'),
    'signed_datetime' => date('j F Y \a\t H:i'),
    'ip_address' => $_SERVER['REMOTE_ADDR'],
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];
$pdfGenerator = new AgreementPdfGenerator();
$pdfResult = $pdfGenerator->generate($pdfData);
echo "PDF result: " . ($pdfResult['success'] ? 'success' : 'failed - ' . ($pdfResult['error'] ?? 'unknown')) . "<br>";

if (!$pdfResult['success']) {
    die("PDF generation failed");
}

$pdfPath = $pdfResult['path'];
echo "Step 15: PDF saved to: $pdfPath<br>";

echo "Step 16: Marking agreement as signed<br>";
$applicantModel->markAgreementSigned(
    $applicant['id'],
    $pdfPath,
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
);
echo "Agreement marked as signed<br>";

echo "Step 17: Loading portal classes<br>";
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
// Database class already loaded from ATS - skip portal version to avoid conflict
echo "Using existing Database class from ATS<br>";
require_once dirname(__DIR__) . '/assignments/includes/classes/Associate.php';
echo "Associate class loaded<br>";
require_once dirname(__DIR__) . '/assignments/includes/classes/PortalEmail.php';
echo "PortalEmail loaded<br>";

echo "Step 18: Creating associate account<br>";
$associate = new Associate();
if (!$associate->emailExists($applicant['email'])) {
    echo "Creating new associate<br>";
    $portalToken = bin2hex(random_bytes(32));
    $result = $associate->create([
        'name' => $applicant['full_name'],
        'email' => $applicant['email'],
        'phone' => $applicant['phone'] ?? '',
        'password_reset_token' => $portalToken,
        'password_reset_expires' => date('Y-m-d H:i:s', strtotime('+48 hours')),
        'status' => 'pending'
    ]);
    echo "Create result: " . ($result['success'] ? 'success' : 'failed') . "<br>";
} else {
    echo "Associate already exists<br>";
}

echo "Step 19: Sending emails<br>";
$emailService = new Email();
echo "Sending to applicant<br>";
$emailService->sendAgreementSigned($applicant, $pdfPath);
echo "Sending to admin<br>";
$emailService->sendAgreementAdminNotification($applicant, $agreementFields, $pdfPath);
echo "Emails sent<br>";

echo "<br><strong>ALL STEPS COMPLETE!</strong>";
