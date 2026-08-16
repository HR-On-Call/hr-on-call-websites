<?php
/**
 * Agreement Signing Page
 * URL: /sign/{token}
 */

// Prevent caching
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/ats/config.php';
require_once dirname(__DIR__) . '/ats/includes/Database.php';
require_once dirname(__DIR__) . '/ats/includes/Applicant.php';

// Get token from URL or query parameter
if (isset($_GET['token'])) {
    $agreementToken = $_GET['token'];
} else {
    $requestUri = $_SERVER['REQUEST_URI'];
    $path = parse_url($requestUri, PHP_URL_PATH);
    $pathParts = explode('/', trim($path, '/'));
    $agreementToken = end($pathParts);
    // Remove any query string from token
    $agreementToken = strtok($agreementToken, '?');
}

// Quick DB check
$db = Database::getInstance();
$check = $db->fetchOne("SELECT id, full_name, agreement_token FROM applicants WHERE agreement_token = ?", [$agreementToken]);
if (!$check && isset($_GET['debug'])) {
    echo "Token from URL: " . htmlspecialchars($agreementToken) . "<br>";
    echo "Length: " . strlen($agreementToken) . "<br>";
    echo "DB lookup: NOT FOUND<br>";
    $all = $db->fetchAll("SELECT id, agreement_token FROM applicants WHERE agreement_token IS NOT NULL");
    echo "Tokens in DB: " . count($all) . "<br>";
    foreach ($all as $a) {
        echo "ID {$a['id']}: " . $a['agreement_token'] . "<br>";
    }
    die();
}

// Generate CSRF token from agreement token (no session needed)
$csrfSecret = 'hroncall_sign_2024_secret_key';
$csrfToken = hash('sha256', $agreementToken . $csrfSecret);

// Initialize
$applicantModel = new Applicant();
$validation = $applicantModel->validateAgreementToken($agreementToken);

$pageTitle = 'Associate Agreement';
$error = null;
$applicant = null;

if (!$validation['valid']) {
    $error = $validation['error'];
    $applicant = $validation['applicant'];
} else {
    $applicant = $validation['applicant'];
}

// Get agreement text - use custom text if set, otherwise use template
if (!empty($applicant['custom_agreement_text'])) {
    $agreementText = $applicant['custom_agreement_text'];
} else {
    $agreementText = include dirname(__DIR__) . '/ats/templates/agreement-text.php';
}

// Debug mode
if (isset($_GET['debug_text'])) {
    echo "<pre>";
    echo "Has custom text: " . (!empty($applicant['custom_agreement_text']) ? 'YES' : 'NO') . "\n";
    echo "Custom text length: " . strlen($applicant['custom_agreement_text'] ?? '') . "\n";
    echo "First 100 chars: " . substr($agreementText, 0, 100) . "\n";
    echo "</pre>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - HR On Call</title>
    <link rel="icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --pink-accent: #DB2777;
            --gold-accent: #C9A962;
            --navy: #1A2E4A;
            --cream: #FDFCFA;
            --text-color: #2D3748;
            --text-secondary: #4A5568;
            --border-color: #E2E8F0;
            --error-color: #E53E3E;
            --success-color: #38A169;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--cream);
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            border: 2px solid var(--gold-accent);
            padding: 40px;
            margin-bottom: 30px;
        }

        h1 {
            color: var(--navy);
            font-size: 1.75rem;
            margin-bottom: 10px;
        }

        h2 {
            color: var(--navy);
            font-size: 1.25rem;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--gold-accent);
        }

        h3 {
            color: var(--navy);
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .subtitle {
            color: var(--text-secondary);
            font-size: 1rem;
        }

        /* Error States */
        .error-container {
            text-align: center;
            padding: 60px 20px;
        }

        .error-icon {
            font-size: 4rem;
            color: var(--error-color);
            margin-bottom: 20px;
        }

        .error-container h2 {
            border: none;
            color: var(--navy);
        }

        .error-container p {
            color: var(--text-secondary);
            margin-bottom: 20px;
        }

        /* Applicant Details */
        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .detail-item label {
            display: block;
            font-size: 0.8rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 3px;
        }

        .detail-item .value {
            font-weight: 500;
            color: var(--navy);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--navy);
        }

        .form-group .required {
            color: var(--pink-accent);
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-family: inherit;
            font-size: 15px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--pink-accent);
        }

        .form-group .helper {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 5px;
        }

        /* Agreement Text Container */
        .agreement-text {
            background: #f8f9fa;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 25px;
            max-height: 400px;
            overflow-y: auto;
            font-size: 0.9rem;
            line-height: 1.7;
            white-space: pre-wrap;
            margin-bottom: 20px;
        }

        /* Signature Section */
        .signature-section {
            background: #FEF3C7;
            border: 2px solid var(--gold-accent);
            border-radius: 8px;
            padding: 25px;
            margin-top: 30px;
        }

        .signature-section h3 {
            margin-bottom: 15px;
        }

        .checkbox-group {
            margin-bottom: 15px;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
            cursor: pointer;
        }

        .checkbox-item input[type="checkbox"] {
            margin-top: 4px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .checkbox-item span {
            flex: 1;
        }

        .signature-input {
            margin-top: 20px;
        }

        .signature-input input {
            font-size: 1.25rem;
            padding: 15px;
            font-style: italic;
        }

        .signature-date {
            margin-top: 15px;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 14px 28px;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-primary {
            background: var(--pink-accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: #BE185D;
        }

        .btn-secondary {
            background: var(--navy);
            color: #fff;
        }

        .btn-secondary:hover {
            background: #0F1D2F;
        }

        .btn-block {
            display: block;
            width: 100%;
            text-align: center;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            color: var(--text-secondary);
            font-size: 0.85rem;
        }

        .footer a {
            color: var(--pink-accent);
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 20px 15px;
            }

            .card {
                padding: 25px 20px;
            }

            .details-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp" alt="HR On Call" class="logo">
        </div>

        <?php if ($error): ?>
            <!-- Error States -->
            <div class="card">
                <div class="error-container">
                    <?php if ($error === 'invalid'): ?>
                        <div class="error-icon"><i class="fas fa-link-slash"></i></div>
                        <h2>Invalid Link</h2>
                        <p>This link is invalid. Please contact Grace if you need a new agreement link.</p>
                    <?php elseif ($error === 'expired'): ?>
                        <div class="error-icon"><i class="fas fa-clock"></i></div>
                        <h2>Link Expired</h2>
                        <p>This link has expired. Please contact Grace for a new agreement link.</p>
                    <?php elseif ($error === 'already_signed'): ?>
                        <div class="error-icon" style="color: var(--success-color);"><i class="fas fa-check-circle"></i></div>
                        <h2>Already Signed</h2>
                        <p>You've already signed this agreement. Check your email for your copy, or contact Grace if you need another copy.</p>
                    <?php endif; ?>
                    <a href="mailto:grace@on-call.co.uk" class="btn btn-secondary">Contact Grace</a>
                </div>
            </div>

        <?php else: ?>
            <!-- Agreement Form -->
            <form action="<?php echo SITE_URL; ?>/sign/process.php" method="POST" id="agreementForm">
                <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($agreementToken); ?>">

                <!-- Your Details Section -->
                <div class="card">
                    <h2>Your Details</h2>
                    <p style="margin-bottom: 20px; color: var(--text-secondary);">Please confirm your details are correct.</p>

                    <div class="details-grid">
                        <div class="detail-item">
                            <label>Full Name</label>
                            <div class="value"><?php echo htmlspecialchars($applicant['full_name']); ?></div>
                        </div>
                        <div class="detail-item">
                            <label>Email</label>
                            <div class="value"><?php echo htmlspecialchars($applicant['email']); ?></div>
                        </div>
                        <div class="detail-item">
                            <label>Phone</label>
                            <div class="value"><?php echo htmlspecialchars($applicant['phone']); ?></div>
                        </div>
                        <div class="detail-item">
                            <label>Location</label>
                            <div class="value"><?php echo htmlspecialchars($applicant['location']); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Business Details Section -->
                <div class="card">
                    <h2>Business Details</h2>
                    <p style="margin-bottom: 20px; color: var(--text-secondary);">Please provide your business details for the agreement.</p>

                    <div class="form-group">
                        <label for="business_name">Business Name / Trading Name <span class="required">*</span></label>
                        <input type="text" id="business_name" name="business_name" required placeholder="e.g. Smith HR Consulting Ltd">
                    </div>

                    <div class="form-group">
                        <label for="address_line_1">Address Line 1 <span class="required">*</span></label>
                        <input type="text" id="address_line_1" name="address_line_1" required placeholder="Street address">
                    </div>

                    <div class="form-group">
                        <label for="address_line_2">Address Line 2</label>
                        <input type="text" id="address_line_2" name="address_line_2" placeholder="Apartment, suite, etc. (optional)">
                    </div>

                    <div class="form-group">
                        <label for="address_line_3">Address Line 3</label>
                        <input type="text" id="address_line_3" name="address_line_3" placeholder="Optional">
                    </div>

                    <div class="form-group">
                        <label for="address_line_4">Address Line 4</label>
                        <input type="text" id="address_line_4" name="address_line_4" placeholder="Optional">
                    </div>

                    <div class="details-grid">
                        <div class="form-group">
                            <label for="city">City <span class="required">*</span></label>
                            <input type="text" id="city" name="city" required placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode <span class="required">*</span></label>
                            <input type="text" id="postcode" name="postcode" required placeholder="e.g. PL6 8NL">
                        </div>
                    </div>

                    <div class="details-grid">
                        <div class="form-group">
                            <label for="company_number">Company Registration Number</label>
                            <input type="text" id="company_number" name="company_number" placeholder="Optional">
                            <p class="helper">Leave blank if not a limited company</p>
                        </div>
                        <div class="form-group">
                            <label for="vat_number">VAT Number</label>
                            <input type="text" id="vat_number" name="vat_number" placeholder="Optional">
                            <p class="helper">Leave blank if not VAT registered</p>
                        </div>
                    </div>
                </div>

                <!-- Agreement Text Section -->
                <div class="card">
                    <h2>Associate Agreement</h2>
                    <p style="margin-bottom: 20px; color: var(--text-secondary);">Please read the full agreement below before signing.</p>

                    <div class="agreement-text"><?php echo htmlspecialchars($agreementText); ?></div>
                </div>

                <!-- Signature Section -->
                <div class="card">
                    <div class="signature-section">
                        <h3><i class="fas fa-signature"></i> Sign this Agreement</h3>

                        <p style="margin-bottom: 20px;">I, <strong><?php echo htmlspecialchars($applicant['full_name']); ?></strong>, confirm that:</p>

                        <div class="checkbox-group">
                            <label class="checkbox-item">
                                <input type="checkbox" name="confirm_read" value="1" required>
                                <span>I have read and understood this Associate Agreement</span>
                            </label>

                            <label class="checkbox-item">
                                <input type="checkbox" name="confirm_self_employed" value="1" required>
                                <span>I am entering into this agreement as a self-employed contractor</span>
                            </label>

                            <label class="checkbox-item">
                                <input type="checkbox" name="confirm_insurance" value="1" required>
                                <span>I have professional indemnity insurance or will obtain it before undertaking any work</span>
                            </label>
                        </div>

                        <div class="signature-input form-group">
                            <label for="signature">Type your full name as your signature <span class="required">*</span></label>
                            <input type="text" id="signature" name="signature" required placeholder="Type your full name exactly as shown above">
                            <p class="helper">Must match: <?php echo htmlspecialchars($applicant['full_name']); ?></p>
                        </div>

                        <p class="signature-date">
                            <strong>Date:</strong> <?php echo date('j F Y'); ?>
                        </p>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 25px;">
                        <i class="fas fa-check"></i> Sign Agreement
                    </button>
                </div>
            </form>
        <?php endif; ?>

        <div class="footer">
            <p><strong>HR On Call Ltd</strong></p>
            <p><a href="https://associate.on-call.co.uk">associate.on-call.co.uk</a> | <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
        </div>
    </div>

    <script>
    document.getElementById('agreementForm')?.addEventListener('submit', function(e) {
        const signature = document.getElementById('signature').value.trim().toLowerCase();
        const expectedName = '<?php echo addslashes(strtolower($applicant['full_name'] ?? '')); ?>';

        if (signature !== expectedName) {
            e.preventDefault();
            alert('Your signature must match your name exactly: <?php echo addslashes($applicant['full_name'] ?? ''); ?>');
            document.getElementById('signature').focus();
            return false;
        }

        // Disable button to prevent double submission
        this.querySelector('button[type="submit"]').disabled = true;
        this.querySelector('button[type="submit"]').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
    });
    </script>
</body>
</html>
