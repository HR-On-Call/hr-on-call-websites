<?php
/**
 * Process Contact Form - HR On Call
 */

// Brevo API Configuration
require_once __DIR__ . '/includes/secrets.php';  // gitignored: real keys live on the server
define('EMAIL_FROM_ADDRESS', 'grace@on-call.co.uk');
define('EMAIL_FROM_NAME', 'HR On Call');
define('ADMIN_EMAIL', 'grace@on-call.co.uk');
define('SITE_URL', 'https://plymouth.on-call.co.uk');

// reCAPTCHA Configuration

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(400);
    echo "Invalid request method.";
    exit;
}

// Verify reCAPTCHA v3
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
if (empty($recaptchaResponse)) {
    http_response_code(400);
    echo "Security verification failed. Please try again.";
    exit;
}

$recaptchaVerify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . RECAPTCHA_SECRET_KEY . '&response=' . $recaptchaResponse);
$recaptchaData = json_decode($recaptchaVerify);

// Check if verification succeeded and score is above threshold (0.5)
if (!$recaptchaData->success || $recaptchaData->score < 0.5) {
    http_response_code(400);
    echo "Security verification failed. Please try again or email directly at grace@on-call.co.uk";
    exit;
}

// Get and sanitize form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Please complete all required fields and try again.";
    exit;
}

// Build email content for admin notification
$adminSubject = "New HR Enquiry from " . $name;

$adminBody = "A new enquiry has been received via the HR On Call website.\n\n";
$adminBody .= "Name: " . htmlspecialchars($name) . "\n";
$adminBody .= "Email: " . htmlspecialchars($email) . "\n";
if (!empty($phone)) {
    $adminBody .= "Phone: " . htmlspecialchars($phone) . "\n";
}
if (!empty($company)) {
    $adminBody .= "Company: " . htmlspecialchars($company) . "\n";
}
$adminBody .= "\nMessage:\n" . htmlspecialchars($message) . "\n";

// Build confirmation email for sender
$firstName = explode(' ', $name)[0];
$confirmSubject = "Thank you for contacting HR On Call";
$confirmBody = "Hi " . htmlspecialchars($firstName) . ",\n\n";
$confirmBody .= "Thank you for getting in touch. We've received your message and will respond within 24 hours.\n\n";
$confirmBody .= "In the meantime, feel free to book a discovery call directly if you'd like to chat sooner: https://cal.com/hr-on-call/discovery-call\n\n";
$confirmBody .= "Best regards,\n\nGrace Pariser\nHR On Call";

/**
 * Send email via Brevo API
 */
function sendBrevoEmail($to, $toName, $subject, $body, $replyTo = null, $replyToName = null) {
    $url = 'https://api.brevo.com/v3/smtp/email';

    // Wrap in styled HTML template
    $htmlBody = wrapEmailTemplate($body);

    $data = [
        'sender' => [
            'name' => EMAIL_FROM_NAME,
            'email' => EMAIL_FROM_ADDRESS
        ],
        'to' => [
            [
                'email' => $to,
                'name' => $toName
            ]
        ],
        'subject' => $subject,
        'htmlContent' => $htmlBody,
        'textContent' => strip_tags($body)
    ];

    // Add reply-to if specified
    if ($replyTo) {
        $data['replyTo'] = [
            'email' => $replyTo,
            'name' => $replyToName ?? $replyTo
        ];
    } else {
        $data['replyTo'] = [
            'name' => EMAIL_FROM_NAME,
            'email' => EMAIL_FROM_ADDRESS
        ];
    }

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Content-Type: application/json',
        'api-key: ' . BREVO_API_KEY
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode >= 200 && $httpCode < 300;
}

/**
 * Wrap content in styled email template
 */
function wrapEmailTemplate($content) {
    $logoUrl = SITE_URL . '/assets/images/hr-on-call-logo-light.webp';

    // Convert line breaks to paragraphs
    $paragraphs = preg_split('/\n\s*\n/', trim($content));
    $htmlContent = '';
    foreach ($paragraphs as $para) {
        $para = trim($para);
        if (empty($para)) continue;
        $para = nl2br(htmlspecialchars($para));
        // Convert URLs to links
        $para = preg_replace('/(https?:\/\/[^\s<]+)/', '<a href="$1" style="color: #DB2777;">$1</a>', $para);
        $htmlContent .= '<p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">' . $para . '</p>';
    }

    return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #FDFCFA; color: #2D3748;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FDFCFA;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width: 600px; width: 100%;">
                    <tr>
                        <td align="center" style="padding: 0 0 30px 0;">
                            <img src="' . $logoUrl . '" alt="HR On Call" width="180" style="display: block; max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FFFFFF; border-radius: 6px; border: 2px solid #C9A962;">
                                <tr>
                                    <td style="padding: 35px 40px;">
                                        ' . $htmlContent . '
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 30px 20px;">
                            <p style="margin: 0; font-size: 13px; color: #718096;">
                                <a href="https://plymouth.on-call.co.uk" style="color: #1A2E4A; text-decoration: none;">plymouth.on-call.co.uk</a>
                                &nbsp;|&nbsp;
                                <a href="mailto:grace@on-call.co.uk" style="color: #1A2E4A; text-decoration: none;">grace@on-call.co.uk</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
}

// Send admin notification (with reply-to set to the enquirer's email)
$adminSent = sendBrevoEmail(ADMIN_EMAIL, 'Grace Pariser', $adminSubject, $adminBody, $email, $name);

// Send confirmation to the person who submitted the form
$confirmSent = sendBrevoEmail($email, $name, $confirmSubject, $confirmBody);

// Return response
if ($adminSent) {
    http_response_code(200);
    echo "Thank you! Your message has been sent. We'll be in touch soon.";
} else {
    http_response_code(500);
    echo "Oops! Something went wrong. Please try emailing directly at grace@on-call.co.uk";
}
