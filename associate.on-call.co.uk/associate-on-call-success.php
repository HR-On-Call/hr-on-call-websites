<?php
/**
 * Associate On Call - Stripe Checkout Success Page
 * Sends notification email to Grace and welcome email to customer
 */

require_once 'config.php';

// Get session ID and customer email from URL if available
$sessionId = isset($_GET['session_id']) ? $_GET['session_id'] : 'Not provided';
$customerEmail = isset($_GET['customer_email']) ? $_GET['customer_email'] : '';

// Brevo API Configuration
require_once __DIR__ . '/includes/secrets.php';  // gitignored: real keys live on the server

function sendBrevoEmail($to, $toName, $subject, $htmlContent, $textContent = '') {
    $url = 'https://api.brevo.com/v3/smtp/email';

    $data = [
        'sender' => [
            'name' => 'Associate On Call',
            'email' => 'grace@on-call.co.uk'
        ],
        'to' => [
            [
                'email' => $to,
                'name' => $toName
            ]
        ],
        'subject' => $subject,
        'htmlContent' => $htmlContent
    ];

    if ($textContent) {
        $data['textContent'] = $textContent;
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
    curl_close($ch);

    return $response;
}

// Send notification email to Grace
$notifySubject = "New Associate On Call Signup!";
$notifyBody = "Someone has just signed up for an Associate On Call retainer!\n\n";
$notifyBody .= "Time: " . date('d/m/Y H:i:s') . "\n";
$notifyBody .= "Stripe Session ID: " . $sessionId . "\n";
if ($customerEmail) {
    $notifyBody .= "Customer Email: " . $customerEmail . "\n";
}
$notifyBody .= "\nAction Required:\n";
$notifyBody .= "1. Check your Stripe dashboard for the new subscription\n";
$notifyBody .= "2. Confirm which package they signed up for\n";
$notifyBody .= "3. Set up their HR Vault access\n";
$notifyBody .= "4. Send welcome pack and onboarding information\n\n";
$notifyBody .= "Stripe Dashboard: https://dashboard.stripe.com/subscriptions\n";
$notifyBody .= "Customer Billing Portal: https://billing.stripe.com/p/login/4gM14ndra9kdgdR33g2ZO00\n";

sendBrevoEmail('grace@on-call.co.uk', 'Grace Pariser', $notifySubject, '', $notifyBody);

// TODO: Xero Integration
// When Xero is set up, add invoice creation here
// Options: 1) Use Stripe's native Xero integration (recommended)
//          2) Use Zapier/Make automation
//          3) Custom Xero API integration (requires OAuth setup)

// Send welcome email to customer (if we have their email)
if ($customerEmail && filter_var($customerEmail, FILTER_VALIDATE_EMAIL)) {
    $welcomeSubject = "Welcome to Associate On Call!";
    $welcomeHtml = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Associate On Call</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #FDFCFA; color: #2D3748;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FDFCFA;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width: 600px; width: 100%;">
                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding: 0 0 30px 0;">
                            <img src="https://associate.on-call.co.uk/assets/images/hr-on-call-logo-light.webp" alt="HR On Call" width="180" style="display: block; max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <!-- Main Content Card -->
                    <tr>
                        <td>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FFFFFF; border-radius: 6px; border: 2px solid #C9A962;">
                                <tr>
                                    <td style="padding: 35px 40px;">
                                        <p style="text-align: center; margin: 0 0 24px 0;">
                                            <img src="https://associate.on-call.co.uk/assets/images/logo-associate-on-call-navy.webp" alt="Associate On Call" width="200" style="display: inline-block; max-width: 200px; height: auto;">
                                        </p>

                                        <p style="margin: 0 0 16px 0; font-size: 22px; font-weight: bold; line-height: 1.4; color: #1B365D;">Welcome to Associate On Call!</p>

                                        <p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">Thank you for subscribing to Associate On Call. Your subscription is now active and your 3-month initial term has begun.</p>

                                        <p style="margin: 0 0 12px 0; font-size: 17px; font-weight: bold; line-height: 1.4; color: #1B365D;">What happens next?</p>

                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 0 0 16px 0;">
                                            <tr><td style="padding: 4px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">&#8226; I\'ll be in touch within 24 hours to welcome you personally</td></tr>
                                            <tr><td style="padding: 4px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">&#8226; You\'ll receive access details for The HR Vault</td></tr>
                                            <tr><td style="padding: 4px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">&#8226; We\'ll arrange a call to understand your consultancy and clients</td></tr>
                                        </table>

                                        <p style="margin: 0 0 12px 0; font-size: 17px; font-weight: bold; line-height: 1.4; color: #1B365D;">Manage Your Subscription</p>

                                        <p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">You can view and manage your subscription details here:</p>

                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 8px 0 24px 0;">
                                            <tr>
                                                <td style="border-radius: 6px; background-color: #DB2777;">
                                                    <a href="https://billing.stripe.com/p/login/4gM14ndra9kdgdR33g2ZO00" target="_blank" style="display: inline-block; padding: 12px 24px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Manage Subscription</a>
                                                </td>
                                            </tr>
                                        </table>

                                        <p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">If you have any questions, just reply to this email or contact me at <a href="mailto:grace@on-call.co.uk" style="color: #DB2777; text-decoration: none;">grace@on-call.co.uk</a>.</p>

                                        <p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">I\'m looking forward to working with you!</p>

                                        <p style="margin: 24px 0 0 0; font-size: 15px; line-height: 1.6; color: #2D3748;">
                                            Kind regards,<br>
                                            <strong>Grace Pariser</strong><br>
                                            HR On Call Ltd
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding: 30px 20px;">
                            <p style="margin: 0; font-size: 13px; color: #718096;">
                                <a href="https://associate.on-call.co.uk" style="color: #DB2777; text-decoration: none;">associate.on-call.co.uk</a>
                                &nbsp;|&nbsp;
                                <a href="mailto:grace@on-call.co.uk" style="color: #DB2777; text-decoration: none;">grace@on-call.co.uk</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

    sendBrevoEmail($customerEmail, '', $welcomeSubject, $welcomeHtml);
}

$pageTitle = 'Welcome to Associate On Call!';
$pageDescription = 'Your subscription is confirmed. We will be in touch within 24 hours.';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-associate-on-call-navy.webp" alt="Associate On Call">
            </div>
            <h1>Welcome to Associate On Call!</h1>
            <p class="hero-subtitle">Your subscription is confirmed and your retainer is now active.</p>
        </div>
    </div>
</section>

<!-- Success Info Section -->
<section class="section bg-dark">
    <div class="container">
        <div class="features-grid features-grid-2">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-envelope"></i></div>
                <h3>Within 24 Hours</h3>
                <p>I'll be in touch personally to welcome you and discuss how we can best support your consultancy</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-vault"></i></div>
                <h3>HR Vault Access</h3>
                <p>You'll receive your login details for The HR Vault with 500+ templates and resources</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                <h3>Onboarding Call</h3>
                <p>We'll arrange a call to understand your consultancy, your clients and how to work together</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-headset"></i></div>
                <h3>Ready to Help</h3>
                <p>Once onboarded, you can start using your retainer hours straight away</p>
            </div>
        </div>

        <div class="bespoke-callout" style="margin-top: 2rem;">
            <div class="card-icon"><i class="fas fa-envelope"></i></div>
            <div class="callout-content">
                <h4>Check Your Inbox</h4>
                <p>You should receive a confirmation email shortly with next steps. If you have any questions, contact me at <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
            </div>
        </div>

        <div class="bespoke-callout" style="margin-top: 1rem;">
            <div class="card-icon"><i class="fas fa-credit-card"></i></div>
            <div class="callout-content">
                <h4>Manage Your Subscription</h4>
                <p>You can view, update or cancel your subscription at any time via our billing portal: <a href="https://billing.stripe.com/p/login/4gM14ndra9kdgdR33g2ZO00" target="_blank" rel="noopener">Manage Subscription</a></p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>While You Wait</h2>
            <p>Find out more about how we work together.</p>
            <div class="cta-buttons">
                <a href="<?php echo SITE_URL; ?>/associate-on-call.php" class="btn btn-primary">Back to Associate On Call</a>
                <a href="https://billing.stripe.com/p/login/4gM14ndra9kdgdR33g2ZO00" class="btn btn-secondary" target="_blank" rel="noopener">Manage Subscription</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
