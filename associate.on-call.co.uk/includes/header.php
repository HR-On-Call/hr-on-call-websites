<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR support when you need it.'; ?>">
    <meta name="author" content="HR On Call Ltd">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR support when you need it.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/associate-on-call-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR support when you need it.'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/associate-on-call-og.png">

    <!-- Additional SEO -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="<?php echo $pageKeywords ?? 'HR consultant, HR support, associate HR, HR documents, HR templates, employment law, CIPD, HR consultancy'; ?>">

    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_URL; ?>/assets/images/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_URL; ?>/assets/images/favicon-16x16.png?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_URL; ?>/assets/images/apple-touch-icon.png?v=2">
    <link rel="canonical" href="<?php echo SITE_URL . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">

    <link rel="stylesheet" href="/assets/css/style.css?v=171">
    <link rel="stylesheet" href="/assets/css/cookies.css?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></noscript>

    <?php if (isset($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "HR On Call",
        "url": "https://associate.on-call.co.uk"
    }
    </script>
</head>
<body class="<?php echo $bodyClass ?? ''; ?>">
    <div class="top-bar">
        <div class="container">
            <a href="https://clients.on-call.co.uk/login.php" class="top-bar-link" target="_blank" rel="noopener"><i class="fas fa-user"></i> Client Portal Login</a>
        </div>
    </div>
    <header class="site-header">
        <div class="container">
            <nav class="main-nav">
                <div class="nav-brand">
                    <a href="<?php echo SITE_URL; ?>" style="position:relative;">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp?v=2" alt="<?php echo SITE_NAME; ?>" class="logo-image">
                        <span style="position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap;">HR On Call</span>
                    </a>
                </div>

                <div class="nav-links">
                    <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link">About</a>
                    <a href="<?php echo SITE_URL; ?>/associate-on-call.php" class="nav-link">Associate On Call</a>
                    <div class="nav-dropdown">
                        <a href="<?php echo SITE_URL; ?>/vault.php" class="nav-link">Vault <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 4px;"></i></a>
                        <div class="dropdown-menu">
                            <a href="https://www.thehrvault.co.uk" target="_blank" rel="noopener">The HR Vault</a>
                            <a href="<?php echo SITE_URL; ?>/the-client-vault.php">The Client Vault</a>
                        </div>
                    </div>
                    <a href="https://practice-hub.co.uk/" class="nav-link" target="_blank" rel="noopener noreferrer">Practice Hub</a>
                    <a href="https://popandpixel.co.uk/" class="nav-link" target="_blank" rel="noopener noreferrer">Websites</a>
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-link">Contact</a>
                </div>

                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">
