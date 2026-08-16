<?php
/**
 * Process Referrer Signup Form - HR On Call
 * Sends via the Brevo API (reliable transactional email), matching process-contact.php.
 */

// Brevo API Configuration
require_once __DIR__ . '/includes/secrets.php';  // gitignored: real keys live on the server
define('EMAIL_FROM_ADDRESS', 'grace@on-call.co.uk');
define('EMAIL_FROM_NAME', 'HR On Call');
define('ADMIN_EMAIL', 'grace@on-call.co.uk');
define('SITE_URL', 'https://plymouth.on-call.co.uk');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: accountants.php');
    exit();
}

// Collect and sanitize form data
$first_name = trim($_POST['first_name'] ?? '');
$last_name = trim($_POST['last_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$location = trim($_POST['location'] ?? '');
$client_size = trim($_POST['client_size'] ?? 'Not specified');
$referral_frequency = trim($_POST['referral_frequency'] ?? 'Not specified');
$additional_info = trim($_POST['additional_info'] ?? 'None provided');
$terms_accepted = isset($_POST['terms_accepted']) ? 'Yes' : 'No';
$marketing_emails = isset($_POST['marketing_emails']) ? 'Yes' : 'No';

// Basic validation
if (empty($first_name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: accountants.php?signup=error');
    exit();
}

// Build admin notification body
$adminSubject = "New Referrer Signup - " . $first_name . " " . $last_name;
$adminBody = "A new referrer signup request has been received.\n\n";
$adminBody .= "CONTACT INFORMATION\n";
$adminBody .= "Name: " . $first_name . " " . $last_name . "\n";
$adminBody .= "Email: " . $email . "\n";
$adminBody .= "Phone: " . $phone . "\n";
$adminBody .= "Company/Practice: " . $company . "\n";
$adminBody .= "Location: " . $location . "\n\n";
$adminBody .= "REFERRAL DETAILS\n";
$adminBody .= "Typical Client Size: " . $client_size . "\n";
$adminBody .= "Expected Referral Frequency: " . $referral_frequency . "\n\n";
$adminBody .= "ADDITIONAL INFORMATION\n";
$adminBody .= $additional_info . "\n\n";
$adminBody .= "PREFERENCES\n";
$adminBody .= "Terms Accepted: " . $terms_accepted . "\n";
$adminBody .= "Marketing Emails: " . $marketing_emails . "\n\n";
$adminBody .= "Submitted: " . date('d/m/Y H:i:s') . "\n";
$adminBody .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? '');

// Build confirmation email for the referrer
$confirmSubject = "Thank you for joining our referrer network";
$confirmBody = "Dear " . $first_name . ",\n\n";
$confirmBody .= "Thank you for your interest in joining our referrer network.\n\n";
$confirmBody .= "We've received your application and will be in touch shortly to discuss how we can work together.\n\n";
$confirmBody .= "In the meantime, if you have any questions, please don't hesitate to contact us.\n\n";
$confirmBody .= "Best regards,\n\nGrace Pariser\nHR On Call";

/**
 * Send email via Brevo API
 */
function sendBrevoEmail($to, $toName, $subject, $body, $replyTo = null, $replyToName = null) {
    $url = 'https://api.brevo.com/v3/smtp/email';
    $htmlBody = wrapEmailTemplate($body);

    $data = [
        'sender' => ['name' => EMAIL_FROM_NAME, 'email' => EMAIL_FROM_ADDRESS],
        'to' => [['email' => $to, 'name' => $toName]],
        'subject' => $subject,
        'htmlContent' => $htmlBody,
        'textContent' => strip_tags($body)
    ];

    if ($replyTo) {
        $data['replyTo'] = ['email' => $replyTo, 'name' => $replyToName ?? $replyTo];
    } else {
        $data['replyTo'] = ['name' => EMAIL_FROM_NAME, 'email' => EMAIL_FROM_ADDRESS];
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
    $paragraphs = preg_split('/\n\s*\n/', trim($content));
    $htmlContent = '';
    foreach ($paragraphs as $para) {
        $para = trim($para);
        if (empty($para)) continue;
        $para = nl2br(htmlspecialchars($para));
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

// Send admin notification (reply-to set to the referrer)
$adminSent = sendBrevoEmail(ADMIN_EMAIL, 'Grace Pariser', $adminSubject, $adminBody, $email, $first_name . ' ' . $last_name);

// Send confirmation to the referrer
if ($adminSent) {
    sendBrevoEmail($email, $first_name . ' ' . $last_name, $confirmSubject, $confirmBody);
}

// Redirect back to the page
if ($adminSent) {
    header('Location: accountants.php?signup=success');
    exit();
} else {
    header('Location: accountants.php?signup=error');
    exit();
}
