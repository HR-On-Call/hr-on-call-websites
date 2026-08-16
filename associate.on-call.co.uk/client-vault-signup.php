<?php
require_once 'config.php';

// Brevo API Configuration
require_once __DIR__ . '/includes/secrets.php';  // gitignored: real keys live on the server
define('EMAIL_FROM_ADDRESS', 'grace@on-call.co.uk');
define('EMAIL_FROM_NAME', 'Grace Pariser');
define('ADMIN_EMAIL', 'grace@on-call.co.uk');

$pageTitle = 'Client Vault Sign-Up';
$pageDescription = 'Complete this form to set up your branded HR document platform.';

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
    // Basic validation
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $domain_option = $_POST['domain_option'] ?? '';
    $custom_domain = trim($_POST['custom_domain'] ?? '');
    $tier = $_POST['tier'] ?? '';
    $extras = $_POST['extras'] ?? [];
    $agree_payment = isset($_POST['agree_payment']);
    $agree_terms = isset($_POST['agree_terms']);

    if (empty($name)) $errors[] = 'Your name is required';
    if (empty($company)) $errors[] = 'Company name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email address is required';
    if (empty($domain_option)) $errors[] = 'Please select a domain option';
    if ($domain_option === 'own' && empty($custom_domain)) $errors[] = 'Please specify your custom domain';
    if (empty($tier)) $errors[] = 'Please select a subscription tier';
    if (!$agree_payment) $errors[] = 'You must agree to the payment terms';
    if (!$agree_terms) $errors[] = 'You must agree to the terms and conditions';

    if (empty($errors)) {
        // Format optional extras for display
        $extraLabels = [
            'videos' => 'Training Videos module (+£125 set-up + VAT)',
            'faqs'   => 'FAQs module (+£125 set-up + VAT)',
        ];

        $selectedExtras = [];
        foreach ($extras as $ex) {
            if (isset($extraLabels[$ex])) {
                $selectedExtras[] = $extraLabels[$ex];
            }
        }
        $extras_text = !empty($selectedExtras) ? "- " . implode("\n- ", $selectedExtras) : 'None selected';

        // Format tier for display
        $tierLabels = [
            'starter' => 'Starter (£100/month + VAT - up to 5 clients)',
            'growth' => 'Growth (£200/month + VAT - up to 20 clients)',
            'scale' => 'Scale (£300/month + VAT - unlimited clients)',
        ];
        $tierDisplay = $tierLabels[$tier] ?? $tier;

        // Build admin notification email
        $adminSubject = "New Client Vault Sign-Up: " . $company;
        $adminBody = "New Client Vault Sign-Up Request\n\n";
        $adminBody .= "Contact Details:\n";
        $adminBody .= "Name: " . htmlspecialchars($name) . "\n";
        $adminBody .= "Company: " . htmlspecialchars($company) . "\n";
        $adminBody .= "Email: " . htmlspecialchars($email) . "\n\n";
        $adminBody .= "Platform Setup:\n";
        $adminBody .= "Domain: " . ($domain_option === 'subdomain' ? 'Subdomain of on-call.co.uk' : 'Own domain: ' . htmlspecialchars($custom_domain)) . "\n";
        $adminBody .= "Tier: " . $tierDisplay . "\n\n";
        $adminBody .= "Optional Extras:\n" . $extras_text . "\n";

        // Build confirmation email for customer
        $firstName = explode(' ', $name)[0];
        $confirmSubject = "Your Client Vault Sign-Up Request";
        $confirmBody = "Hi " . htmlspecialchars($firstName) . ",\n\n";
        $confirmBody .= "Thank you for signing up for The Client Vault.\n\n";
        $confirmBody .= "I've received your request and will be in touch shortly to arrange payment and get your platform set up.\n\n";
        $confirmBody .= "Here's a summary of your request:\n\n";
        $confirmBody .= "Tier: " . $tierDisplay . "\n";
        $confirmBody .= "Domain: " . ($domain_option === 'subdomain' ? 'Subdomain of on-call.co.uk' : 'Own domain: ' . htmlspecialchars($custom_domain)) . "\n";
        $confirmBody .= "Optional extras: " . (!empty($selectedExtras) ? implode(', ', $selectedExtras) : 'None') . "\n\n";
        $confirmBody .= "If you have any questions in the meantime, just reply to this email.\n\n";
        $confirmBody .= "Best regards,\n\nGrace Pariser\nHR On Call Ltd";

        // Send emails via Brevo
        $adminSent = sendBrevoEmail(ADMIN_EMAIL, 'Grace Pariser', $adminSubject, $adminBody, $email);
        $confirmSent = sendBrevoEmail($email, $name, $confirmSubject, $confirmBody);

        if ($adminSent && $confirmSent) {
            $success = true;
        } else {
            $errors[] = 'There was an error submitting your form. Please try again or contact us directly.';
        }
    }
}
?>

<?php include 'includes/header.php'; ?>

<section class="section bg-light">
    <div class="container">
        <div class="content-card" style="max-width: 800px; margin: 0 auto; background: white; padding: 3rem; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">

            <div class="page-header" style="text-align: center; margin-bottom: 2rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border-color);">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-client-vault-navy.webp" alt="The Client Vault" style="max-height: 80px; margin-bottom: 1.5rem;">
                <h1>The Client Vault - Sign-Up Form</h1>
                <p style="color: var(--text-secondary);">Complete this form to set up your branded HR document platform.</p>
            </div>

            <?php if ($success): ?>
                <div class="success-message" style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 2rem; border-radius: var(--border-radius); text-align: center;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 1rem; display: block;"></i>
                    <h2 style="color: #155724;">Thank You!</h2>
                    <p>Your sign-up form has been submitted successfully. We'll be in touch shortly to get your Client Vault set up.</p>
                    <a href="<?php echo SITE_URL; ?>" class="btn btn-primary" style="margin-top: 1rem;">Return to Homepage</a>
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
                    <!-- Your Details -->
                    <div class="form-section" style="margin-bottom: 2.5rem;">
                        <h2 style="border-bottom: 2px solid var(--pink-accent); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Your Details</h2>

                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Your Name <span style="color: var(--error-color);">*</span></label>
                            <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem;">
                        </div>

                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="company" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Company Name <span style="color: var(--error-color);">*</span></label>
                            <input type="text" id="company" name="company" required value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem;">
                        </div>

                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email Address <span style="color: var(--error-color);">*</span></label>
                            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem;">
                        </div>
                    </div>

                    <!-- Domain Setup -->
                    <div class="form-section" style="margin-bottom: 2.5rem;">
                        <h2 style="border-bottom: 2px solid var(--pink-accent); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Domain Setup</h2>
                        <p style="margin-bottom: 1.5rem; color: var(--text-secondary);">Choose your platform domain <span style="color: var(--error-color);">*</span></p>

                        <div class="radio-option" style="background: var(--background-color); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem; border: 2px solid transparent; cursor: pointer;" onclick="document.getElementById('domain_subdomain').checked = true; this.style.borderColor='var(--pink-accent)'; document.querySelector('.radio-option:last-of-type').style.borderColor='transparent';">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="radio" id="domain_subdomain" name="domain_option" value="subdomain" <?php echo (($_POST['domain_option'] ?? '') === 'subdomain') ? 'checked' : ''; ?> style="margin-right: 1rem; margin-top: 0.25rem;">
                                <div>
                                    <strong>Use a subdomain of on-call.co.uk</strong>
                                    <p style="margin: 0.5rem 0 0 0; color: var(--text-secondary); font-size: 0.9rem;">Your platform will be available at: yourcompanyname.on-call.co.uk<br><em>No technical setup required - we handle everything</em></p>
                                </div>
                            </label>
                        </div>

                        <div class="radio-option" style="background: var(--background-color); padding: 1.5rem; border-radius: var(--border-radius); border: 2px solid transparent; cursor: pointer;" onclick="document.getElementById('domain_own').checked = true; this.style.borderColor='var(--pink-accent)'; document.querySelector('.radio-option:first-of-type').style.borderColor='transparent';">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="radio" id="domain_own" name="domain_option" value="own" <?php echo (($_POST['domain_option'] ?? '') === 'own') ? 'checked' : ''; ?> style="margin-right: 1rem; margin-top: 0.25rem;">
                                <div>
                                    <strong>Use my own domain</strong>
                                    <p style="margin: 0.5rem 0 0 0; color: var(--text-secondary); font-size: 0.9rem;">For example: docs.yourcompany.co.uk or hrdocuments.yourcompany.co.uk<br><em>Requires cPanel access or assistance from your web host to configure DNS settings</em></p>
                                </div>
                            </label>
                        </div>

                        <div class="form-group" style="margin-top: 1.5rem;">
                            <label for="custom_domain" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">If using your own domain, please specify:</label>
                            <input type="text" id="custom_domain" name="custom_domain" placeholder="e.g. docs.mycompany.co.uk" value="<?php echo htmlspecialchars($_POST['custom_domain'] ?? ''); ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--border-radius); font-size: 1rem;">
                        </div>
                    </div>

                    <!-- Subscription Tier -->
                    <div class="form-section" style="margin-bottom: 2.5rem;">
                        <h2 style="border-bottom: 2px solid var(--pink-accent); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Subscription Tier</h2>
                        <p style="margin-bottom: 1.5rem; color: var(--text-secondary);">Select your tier <span style="color: var(--error-color);">*</span></p>

                        <div class="tier-option" style="background: var(--background-color); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem; border: 2px solid transparent;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="radio" name="tier" value="starter" <?php echo (($_POST['tier'] ?? '') === 'starter') ? 'checked' : ''; ?> style="margin-right: 1rem; margin-top: 0.25rem;">
                                <div style="flex: 1;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <strong>Starter - £100/month + VAT</strong>
                                    </div>
                                    <ul style="margin: 0.75rem 0 0 0; padding-left: 1.25rem; color: var(--text-secondary); font-size: 0.9rem;">
                                        <li>Up to 5 client accounts</li>
                                        <li>Custom branding</li>
                                        <li>Full document library</li>
                                        <li>Regular legislative updates</li>
                                        <li>Secure hosting included</li>
                                        <li>Technical support</li>
                                    </ul>
                                </div>
                            </label>
                        </div>

                        <div class="tier-option" style="background: var(--background-color); padding: 1.5rem; border-radius: var(--border-radius); margin-bottom: 1rem; border: 2px solid var(--pink-accent); position: relative;">
                            <span style="position: absolute; top: -10px; right: 20px; background: var(--pink-accent); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Most Popular</span>
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="radio" name="tier" value="growth" <?php echo (($_POST['tier'] ?? '') === 'growth') ? 'checked' : ''; ?> style="margin-right: 1rem; margin-top: 0.25rem;">
                                <div style="flex: 1;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <strong>Growth - £200/month + VAT</strong>
                                    </div>
                                    <ul style="margin: 0.75rem 0 0 0; padding-left: 1.25rem; color: var(--text-secondary); font-size: 0.9rem;">
                                        <li>Up to 20 client accounts</li>
                                        <li>Custom branding</li>
                                        <li>Full document library</li>
                                        <li>Regular legislative updates</li>
                                        <li>Secure hosting included</li>
                                        <li>Technical support</li>
                                    </ul>
                                </div>
                            </label>
                        </div>

                        <div class="tier-option" style="background: var(--background-color); padding: 1.5rem; border-radius: var(--border-radius); border: 2px solid transparent;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="radio" name="tier" value="scale" <?php echo (($_POST['tier'] ?? '') === 'scale') ? 'checked' : ''; ?> style="margin-right: 1rem; margin-top: 0.25rem;">
                                <div style="flex: 1;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <strong>Scale - £300/month + VAT</strong>
                                    </div>
                                    <ul style="margin: 0.75rem 0 0 0; padding-left: 1.25rem; color: var(--text-secondary); font-size: 0.9rem;">
                                        <li>Unlimited client accounts</li>
                                        <li>Custom branding</li>
                                        <li>Full document library</li>
                                        <li>Regular legislative updates</li>
                                        <li>Secure hosting included</li>
                                        <li>Technical support</li>
                                    </ul>
                                </div>
                            </label>
                        </div>

                        <div class="setup-fee" style="background: var(--primary-color); color: white; padding: 1.5rem; border-radius: var(--border-radius); margin-top: 1.5rem;">
                            <h3 style="color: white; margin-bottom: 0.5rem;"><i class="fas fa-cog" style="margin-right: 0.5rem;"></i> One-Off Set-Up Fee: £500 + VAT</h3>
                            <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">Includes custom branding with your logo and colours, platform configuration, administrator training session and client onboarding support. Optional Videos and FAQs modules can be added below.</p>
                        </div>
                    </div>

                    <!-- Optional Extras -->
                    <div class="form-section" style="margin-bottom: 2.5rem;">
                        <h2 style="border-bottom: 2px solid var(--pink-accent); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Optional Extras</h2>
                        <p style="margin-bottom: 1.5rem; color: var(--text-secondary);">Add training videos and FAQs to your platform. Each is a one-off set-up fee; you can then upload your own content, mass-import from a spreadsheet, or add items individually. You can also add these later.</p>

                        <div class="checkbox-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                            <?php
                            $optionalExtras = [
                                'videos' => ['Training Videos module', 'Add training and explainer videos to any category. Bulk-import from a spreadsheet or add individually.', '+£125 set-up + VAT'],
                                'faqs'   => ['FAQs module', 'Add frequently asked questions by topic. Bulk-import from a spreadsheet or add individually.', '+£125 set-up + VAT'],
                            ];
                            foreach ($optionalExtras as $value => $ex):
                                $checked = in_array($value, $_POST['extras'] ?? []) ? 'checked' : '';
                            ?>
                            <div class="checkbox-option" style="background: var(--background-color); padding: 1rem; border-radius: var(--border-radius);">
                                <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                    <input type="checkbox" name="extras[]" value="<?php echo $value; ?>" <?php echo $checked; ?> style="margin-right: 0.75rem; margin-top: 0.25rem;">
                                    <div>
                                        <strong style="font-size: 0.95rem;"><?php echo $ex[0]; ?></strong>
                                        <p style="margin: 0.25rem 0 0 0; font-size: 0.85rem; color: var(--text-secondary);"><?php echo $ex[1]; ?></p>
                                        <div style="margin-top: 0.4rem; color: var(--pink-accent); font-weight: 700;"><?php echo $ex[2]; ?></div>
                                    </div>
                                </label>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Agreement -->
                    <div class="form-section" style="margin-bottom: 2.5rem;">
                        <h2 style="border-bottom: 2px solid var(--pink-accent); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Agreement</h2>

                        <div class="checkbox-option" style="padding: 1rem 0; border-bottom: 1px solid var(--border-color);">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="checkbox" name="agree_payment" required <?php echo isset($_POST['agree_payment']) ? 'checked' : ''; ?> style="margin-right: 0.75rem; margin-top: 0.25rem;">
                                <span>I understand that the set-up fee (£500 + VAT, plus £125 + VAT for each optional module selected) and my first month's subscription will be invoiced prior to platform setup. All prices exclude VAT. <span style="color: var(--error-color);">*</span></span>
                            </label>
                        </div>

                        <div class="checkbox-option" style="padding: 1rem 0;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer;">
                                <input type="checkbox" name="agree_terms" required <?php echo isset($_POST['agree_terms']) ? 'checked' : ''; ?> style="margin-right: 0.75rem; margin-top: 0.25rem;">
                                <span>I understand that my subscription is rolling monthly with 30 days' notice to cancel. <span style="color: var(--error-color);">*</span></span>
                            </label>
                        </div>

                        <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-secondary);">By submitting this form, you agree to our <a href="<?php echo SITE_URL; ?>/terms.php#client-vault" target="_blank">Terms and Conditions</a>.</p>
                    </div>

                    <div class="form-submit" style="text-align: center;">
                        <button type="submit" class="btn btn-primary btn-large">Submit Form</button>
                    </div>
                </form>

            <?php endif; ?>

            <div class="contact-info" style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                <p style="margin: 0; color: var(--text-secondary);"><strong>Questions?</strong> Contact us at <a href="mailto:hello@on-call.co.uk">hello@on-call.co.uk</a> or <a href="<?php echo SITE_URL; ?>/contact.php#book-call">book a call with Grace</a>.</p>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
