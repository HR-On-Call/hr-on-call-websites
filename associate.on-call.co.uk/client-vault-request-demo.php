<?php
require_once 'config.php';

// Brevo API Configuration
require_once __DIR__ . '/includes/secrets.php';  // gitignored: real keys live on the server
define('EMAIL_FROM_ADDRESS', 'grace@on-call.co.uk');
define('EMAIL_FROM_NAME', 'Grace Pariser');
define('ADMIN_EMAIL', 'grace@on-call.co.uk');

$pageTitle = 'Request a Client Vault Demo';
$pageDescription = 'Request a free demo account for The Client Vault - your own branded HR document platform.';

$success = false;
$errors = [];

/**
 * Send email via Brevo API
 */
function sendBrevoEmail($to, $toName, $subject, $body, $replyTo = null) {
    $url = 'https://api.brevo.com/v3/smtp/email';

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

    if ($replyTo) {
        $data['replyTo'] = [
            'email' => $replyTo
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
    $logoUrl = SITE_URL . '/assets/images/logo-client-vault-navy.webp';

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
                            <img src="' . $logoUrl . '" alt="The Client Vault" width="200" style="display: block; max-width: 200px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FFFFFF; border-radius: 6px; border: 2px solid #DB2777;">
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
                                <a href="https://associate.on-call.co.uk" style="color: #1a365d; text-decoration: none;">associate.on-call.co.uk</a>
                                &nbsp;|&nbsp;
                                <a href="mailto:grace@on-call.co.uk" style="color: #1a365d; text-decoration: none;">grace@on-call.co.uk</a>
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (empty($name)) $errors[] = 'Your name is required';
    if (empty($company)) $errors[] = 'Company name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email address is required';

    if (empty($errors)) {
        $adminSubject = "Client Vault Demo Request: " . $company;
        $adminBody = "New Client Vault Demo Request\n\n";
        $adminBody .= "Name: " . htmlspecialchars($name) . "\n";
        $adminBody .= "Company: " . htmlspecialchars($company) . "\n";
        $adminBody .= "Email: " . htmlspecialchars($email) . "\n";

        $firstName = explode(' ', $name)[0];
        $confirmSubject = "Your Client Vault Demo Request";
        $confirmBody = "Hi " . htmlspecialchars($firstName) . ",\n\n";
        $confirmBody .= "Thank you for requesting a demo account for The Client Vault.\n\n";
        $confirmBody .= "I'll set up your demo account and send you login credentials within 48 hours.\n\n";
        $confirmBody .= "In the meantime, you can learn more about The Client Vault here: " . SITE_URL . "/the-client-vault.php\n\n";
        $confirmBody .= "If you have any questions, just reply to this email.\n\n";
        $confirmBody .= "Best regards,\n\nGrace Pariser\nHR On Call Ltd";

        $adminSent = sendBrevoEmail(ADMIN_EMAIL, 'Grace Pariser', $adminSubject, $adminBody, $email);
        $confirmSent = sendBrevoEmail($email, $name, $confirmSubject, $confirmBody);

        if ($adminSent && $confirmSent) {
            $success = true;
        } else {
            $errors[] = 'There was an error submitting your request. Please try again or contact us directly.';
        }
    }
}
?>

<?php include 'includes/header.php'; ?>

<section class="section bg-light">
    <div class="container">
        <div class="content-card" style="max-width: 600px; margin: 0 auto; background: white; padding: 3rem; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">

            <div class="page-header" style="text-align: center; margin-bottom: 2rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border-color);">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-client-vault-navy.webp" alt="The Client Vault" style="max-height: 80px; margin-bottom: 1.5rem;">
                <h1>Request a Demo Account</h1>
                <p style="color: var(--text-secondary);">We'll set up a free demo account so you can explore The Client Vault at your leisure.</p>
            </div>

            <?php if ($success): ?>
                <div class="success-message" style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 2rem; border-radius: var(--border-radius); text-align: center;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 1rem; display: block;"></i>
                    <h2 style="color: #155724;">Demo Request Received</h2>
                    <p>We'll set up your demo account and send you login credentials within 48 hours.</p>
                    <a href="<?php echo SITE_URL; ?>/the-client-vault.php" class="btn btn-primary" style="margin-top: 1rem;">Back to The Client Vault</a>
                </div>
            <?php else: ?>

                <?php if (!empty($errors)): ?>
                    <div class="error-message" style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 1rem; border-radius: var(--border-radius); margin-bottom: 2rem;">
                        <ul style="margin: 0; padding-left: 1.5rem;">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Your Name <span style="color: var(--error-color);">*</span></label>
                        <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="company" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Company Name <span style="color: var(--error-color);">*</span></label>
                        <input type="text" id="company" name="company" required value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem; box-sizing: border-box;">
                    </div>

                    <div class="form-group" style="margin-bottom: 2rem;">
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email Address <span style="color: var(--error-color);">*</span></label>
                        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem; box-sizing: border-box;">
                    </div>

                    <div class="form-submit" style="text-align: center;">
                        <button type="submit" class="btn btn-primary btn-large">Request Demo</button>
                    </div>
                </form>

            <?php endif; ?>

            <div class="contact-info" style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                <p style="margin: 0; color: var(--text-secondary);">Already explored a demo? <a href="<?php echo SITE_URL; ?>/client-vault-signup.php">Sign up now</a></p>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
