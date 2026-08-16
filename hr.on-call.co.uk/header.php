<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'HR On Call - Chartered HR consultants delivering expert employment law advice, HR outsourcing and employee relations support to businesses across the UK.'; ?>">
    <meta name="author" content="HR On Call Ltd">
    <meta name="keywords" content="<?php echo $pageKeywords ?? 'HR On Call, HR consultant UK, remote HR support, HR services UK, employment law advice, HR outsourcing, online HR consultant'; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="GB">
    <meta name="geo.placename" content="United Kingdom">

    <meta property="og:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'HR On Call - Chartered HR consultants delivering expert employment law advice, HR outsourcing and employee relations support to businesses across the UK.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="HR On Call">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/national-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'HR On Call - Chartered HR consultants delivering expert employment law advice, HR outsourcing and employee relations support to businesses across the UK.'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/national-og.png">

    <!-- Favicon for all browsers including Google -->
    <link rel="icon" href="/assets/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/assets/images/favicon-64x64.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/assets/images/favicon-512x512.png">
    <link rel="apple-touch-icon" href="/assets/images/favicon-192x192.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#1A2E4A">
    <link rel="canonical" href="<?php echo SITE_URL . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">

    <link rel="stylesheet" href="/assets/css/style.css?v=2">
    <link rel="stylesheet" href="/assets/css/cookies.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php if (isset($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Structured Data - WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "HR On Call",
        "url": "https://hr.on-call.co.uk"
    }
    </script>

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "HR On Call",
        "url": "https://hr.on-call.co.uk",
        "logo": "https://hr.on-call.co.uk/assets/images/favicon-512x512.png"
    }
    </script>

    <!-- Structured Data - ProfessionalService -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "HR On Call",
        "image": "<?php echo SITE_URL; ?>/assets/images/grace-pariser-profile-v2.webp",
        "url": "<?php echo SITE_URL; ?>",
        "telephone": "<?php echo CONTACT_PHONE; ?>",
        "email": "<?php echo CONTACT_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "description": "Chartered HR consultants providing expert remote HR support to businesses across the UK.",
        "areaServed": {
            "@type": "Country",
            "name": "United Kingdom"
        }
    }
    </script>
</head>
<body class="<?php echo $bodyClass ?? ''; ?>">
    <header class="site-header">
        <div class="container">
            <nav class="main-nav">
                <div class="nav-brand">
                    <a href="<?php echo SITE_URL; ?>">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp" alt="<?php echo SITE_NAME; ?>" class="logo-image">
                    </a>
                </div>

                <div class="nav-links">
                    <a href="<?php echo SITE_URL; ?>/" class="nav-link">Home</a>
                    <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link">About</a>
                    <a href="<?php echo SITE_URL; ?>/services.php" class="nav-link">Services</a>
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-link">Contact</a>
                </div>

                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <main class="main-content">
