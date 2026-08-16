<?php
/**
 * Agreement Signing Confirmation Page
 */

require_once dirname(__DIR__) . '/config.php';

// Check if we have confirmation data via URL (no session needed)
$confirmationData = null;
$confirmSecret = 'hroncall_confirm_2024_key';

if (isset($_GET['d']) && isset($_GET['h'])) {
    $data = $_GET['d'];
    $hash = $_GET['h'];
    $expectedHash = hash('sha256', $data . $confirmSecret);

    if (hash_equals($expectedHash, $hash)) {
        $decoded = json_decode(base64_decode($data), true);
        if ($decoded) {
            $confirmationData = $decoded;
        }
    }
}

$pageTitle = 'Agreement Signed';
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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 550px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        .logo {
            max-width: 180px;
            margin-bottom: 30px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            border: 2px solid var(--gold-accent);
            padding: 40px;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--success-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .success-icon i {
            font-size: 40px;
            color: #fff;
        }

        h1 {
            color: var(--navy);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        p {
            color: var(--text-secondary);
            margin-bottom: 15px;
        }

        .email-highlight {
            background: #f0fdf4;
            border: 1px solid var(--success-color);
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
        }

        .email-highlight p {
            margin: 0;
            color: var(--text-color);
        }

        .welcome-message {
            background: #FEF3C7;
            border: 1px solid var(--gold-accent);
            border-radius: 6px;
            padding: 20px;
            margin: 25px 0;
        }

        .welcome-message h3 {
            color: var(--navy);
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .welcome-message p {
            margin: 0;
            font-size: 0.9rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-family: inherit;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            margin-top: 10px;
        }

        .btn-primary {
            background: var(--pink-accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: #BE185D;
        }

        .footer {
            margin-top: 30px;
            color: var(--text-secondary);
            font-size: 0.85rem;
        }

        .footer a {
            color: var(--pink-accent);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp" alt="HR On Call" class="logo">

        <div class="card">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>

            <h1>Agreement Signed Successfully</h1>

            <?php if ($confirmationData): ?>
                <p>Thank you, <strong><?php echo htmlspecialchars(explode(' ', $confirmationData['name'])[0]); ?></strong>. Your Associate Agreement has been signed.</p>

                <div class="email-highlight">
                    <p><i class="fas fa-envelope"></i> A copy has been sent to <strong><?php echo htmlspecialchars($confirmationData['email']); ?></strong></p>
                </div>
            <?php else: ?>
                <p>Your Associate Agreement has been signed successfully.</p>

                <div class="email-highlight">
                    <p><i class="fas fa-envelope"></i> A copy has been sent to your email address.</p>
                </div>
            <?php endif; ?>

            <div class="welcome-message">
                <h3><i class="fas fa-handshake"></i> Welcome to the Network</h3>
                <p>You're now part of the HR On Call associate network. Grace will be in touch when suitable work becomes available.</p>
            </div>

            <a href="<?php echo SITE_URL; ?>" class="btn btn-primary">
                Visit HR On Call Website
            </a>
        </div>

        <div class="footer">
            <p><strong>HR On Call Ltd</strong></p>
            <p><a href="https://associate.on-call.co.uk">associate.on-call.co.uk</a> | <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
        </div>
    </div>
</body>
</html>
