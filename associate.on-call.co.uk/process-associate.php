<?php
/**
 * Process Associate Application Form
 */

require_once __DIR__ . '/ats/config.php';
require_once __DIR__ . '/ats/includes/Database.php';
require_once __DIR__ . '/ats/includes/Applicant.php';
require_once __DIR__ . '/ats/includes/Email.php';

// Start session for CSRF and flash messages
session_start();

// -----------------------------------------------------------------------------
// APPLICATIONS CLOSED
// We are not currently accepting new associate applications. This blocks every
// submission (including any bookmarked or cached copy of the form) before any
// data is stored or emailed. To re-open applications, remove this block.
// -----------------------------------------------------------------------------
$_SESSION['form_error'] = 'We are not currently accepting new associate applications. Thank you for your interest.';
header('Location: /associates#register');
exit;

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /associates.php');
    exit;
}

// Rate limiting - simple implementation using session
$rateLimitKey = 'associate_form_submissions';
$rateLimitWindow = 3600; // 1 hour
$rateLimitMax = 3; // Max 3 submissions per hour

if (!isset($_SESSION[$rateLimitKey])) {
    $_SESSION[$rateLimitKey] = [];
}

// Clean old entries
$_SESSION[$rateLimitKey] = array_filter($_SESSION[$rateLimitKey], function($timestamp) use ($rateLimitWindow) {
    return $timestamp > (time() - $rateLimitWindow);
});

if (count($_SESSION[$rateLimitKey]) >= $rateLimitMax) {
    $_SESSION['form_error'] = 'Too many submissions. Please try again later.';
    header('Location: /associates.php#register');
    exit;
}

// Validation function
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateUrl($url) {
    if (empty($url)) return true; // Optional fields
    return filter_var($url, FILTER_VALIDATE_URL);
}

// Collect and validate form data
$errors = [];

// Required fields
$requiredFields = [
    'full_name' => 'Full name',
    'email' => 'Email address',
    'phone' => 'Phone number',
    'location' => 'Location',
    'cipd_level' => 'CIPD qualification level',
    'years_experience' => 'Years of HR experience',
    'work_situation' => 'Current work situation',
    'primary_specialism' => 'Primary specialism',
    'experience_summary' => 'Experience summary',
    'has_pi_insurance' => 'Professional indemnity insurance',
    'hourly_rate' => 'Hourly rate'
];

foreach ($requiredFields as $field => $label) {
    if (empty($_POST[$field])) {
        $errors[] = "{$label} is required.";
    }
}

// Validate email format
if (!empty($_POST['email']) && !validateEmail($_POST['email'])) {
    $errors[] = "Please enter a valid email address.";
}

// Validate URLs if provided
if (!validateUrl($_POST['linkedin_url'] ?? '')) {
    $errors[] = "Please enter a valid LinkedIn URL.";
}

if (!validateUrl($_POST['website_url'] ?? '')) {
    $errors[] = "Please enter a valid website URL.";
}

// Validate hourly rate is numeric
if (!empty($_POST['hourly_rate']) && !is_numeric($_POST['hourly_rate'])) {
    $errors[] = "Hourly rate must be a number.";
}

// Validate checkboxes
if (empty($_POST['self_employed_confirmed'])) {
    $errors[] = "You must confirm you are seeking self-employed work.";
}

if (empty($_POST['consent_confirmed'])) {
    $errors[] = "You must consent to data storage to submit your application.";
}

// Validate experience summary length
if (!empty($_POST['experience_summary']) && strlen($_POST['experience_summary']) > 500) {
    $errors[] = "Experience summary must be 500 characters or less.";
}

// Handle CV upload (required)
$cvFilename = null;
$cvPath = null;

// Check CV is uploaded
if (empty($_FILES['cv_upload']['name']) || $_FILES['cv_upload']['error'] === UPLOAD_ERR_NO_FILE) {
    $errors[] = "Please upload your CV.";
} elseif (!empty($_FILES['cv_upload']['name'])) {
    $file = $_FILES['cv_upload'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "CV upload failed. Please try again.";
    } else {
        // Check file size
        if ($file['size'] > MAX_FILE_SIZE) {
            $errors[] = "CV file is too large. Maximum size is 5MB.";
        }

        // Check file type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mimeType, ALLOWED_FILE_TYPES)) {
            $errors[] = "Invalid file type. Please upload a PDF, DOC, or DOCX file.";
        }

        // Check extension
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extension, ALLOWED_EXTENSIONS)) {
            $errors[] = "Invalid file extension. Please upload a PDF, DOC, or DOCX file.";
        }
    }
}

// If there are errors, redirect back with errors
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: /associates.php#register');
    exit;
}

// Check for duplicate email
try {
    $applicantModel = new Applicant();
    $existingApplicant = $applicantModel->getByEmail($_POST['email']);

    if ($existingApplicant) {
        $_SESSION['form_error'] = 'An application with this email address already exists. If you need to update your application, please contact us.';
        $_SESSION['form_data'] = $_POST;
        header('Location: /associates.php#register');
        exit;
    }
} catch (Exception $e) {
    error_log("Database error checking for duplicate: " . $e->getMessage());
    $_SESSION['form_error'] = 'An error occurred. Please try again later.';
    header('Location: /associates.php#register');
    exit;
}

// Process CV upload if provided
if (!empty($_FILES['cv_upload']['name']) && $_FILES['cv_upload']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['cv_upload'];
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $timestamp = time();
    $cvFilename = $file['name'];

    // We'll update the filename with the applicant ID after insert
    $tempFilename = "temp_{$timestamp}_{$cvFilename}";
    $tempPath = UPLOAD_DIR . $tempFilename;

    if (!move_uploaded_file($file['tmp_name'], $tempPath)) {
        error_log("Failed to move uploaded file");
        // Continue without CV - not critical
        $cvFilename = null;
    } else {
        $cvPath = $tempPath;
    }
}

// Prepare data for insertion
$secondarySpecialisms = isset($_POST['secondary_specialisms']) ? json_encode($_POST['secondary_specialisms']) : null;

$applicantData = [
    'full_name' => sanitize($_POST['full_name']),
    'email' => sanitize($_POST['email']),
    'phone' => sanitize($_POST['phone']),
    'location' => sanitize($_POST['location']),
    'linkedin_url' => !empty($_POST['linkedin_url']) ? sanitize($_POST['linkedin_url']) : null,
    'website_url' => !empty($_POST['website_url']) ? sanitize($_POST['website_url']) : null,
    'cipd_level' => sanitize($_POST['cipd_level']),
    'years_experience' => sanitize($_POST['years_experience']),
    'work_situation' => sanitize($_POST['work_situation']),
    'primary_specialism' => sanitize($_POST['primary_specialism']),
    'secondary_specialisms' => $secondarySpecialisms,
    'experience_summary' => sanitize($_POST['experience_summary']),
    'has_pi_insurance' => sanitize($_POST['has_pi_insurance']),
    'vat_registered' => isset($_POST['vat_registered']) ? 1 : 0,
    'referral_source' => !empty($_POST['referral_source']) ? sanitize($_POST['referral_source']) : null,
    'hourly_rate' => (float)$_POST['hourly_rate'],
    'cv_filename' => $cvFilename,
    'cv_path' => null, // Will update after we have the ID
    'self_employed_confirmed' => 1,
    'consent_confirmed' => 1,
    'status' => 'new'
];

try {
    // Insert applicant
    $applicantId = $applicantModel->create($applicantData);

    // Rename CV file with applicant ID if uploaded
    if ($cvPath && file_exists($cvPath)) {
        $newFilename = "{$applicantId}_{$timestamp}_{$cvFilename}";
        $newPath = UPLOAD_DIR . $newFilename;

        if (rename($cvPath, $newPath)) {
            // Update applicant with correct CV path
            $db = Database::getInstance();
            $db->update('applicants', ['cv_path' => $newPath, 'cv_filename' => $cvFilename], 'id = ?', [$applicantId]);
        }
    }

    // Get the full applicant record for emails
    $applicant = $applicantModel->getById($applicantId);

    // Send acknowledgement email
    $emailService = new Email();
    $emailService->sendAcknowledgement($applicant);

    // Send admin notification
    $emailService->sendAdminNotification($applicant);

    // Record rate limit submission
    $_SESSION[$rateLimitKey][] = time();

    // Clear form data and set success message
    unset($_SESSION['form_data']);
    $_SESSION['form_success'] = true;

    // Redirect to thank you page
    header('Location: /associate-thanks.php');
    exit;

} catch (Exception $e) {
    error_log("Error creating applicant: " . $e->getMessage());
    $_SESSION['form_error'] = 'An error occurred processing your application. Please try again later.';
    $_SESSION['form_data'] = $_POST;
    header('Location: /associates.php#register');
    exit;
}
