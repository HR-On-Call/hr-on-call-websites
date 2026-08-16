<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>ATS Admin - HR On Call</title>
    <link rel="icon" href="<?php echo ATS_SITE_URL; ?>/assets/images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/admin.css?v=2">
</head>
<body>
    <div class="admin-wrapper">
        <?php if (isLoggedIn()): ?>
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <img src="<?php echo ATS_SITE_URL; ?>/assets/images/hr-on-call-logo-dark.webp" alt="HR On Call" class="sidebar-logo">
                <span class="sidebar-title">ATS Admin</span>
            </div>

            <nav class="sidebar-nav">
                <a href="index.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="applicants.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'applicants.php' ? 'active' : ''; ?>">
                    <i class="fas fa-users"></i>
                    <span>Applicants</span>
                </a>
                <a href="templates.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'templates.php' ? 'active' : ''; ?>">
                    <i class="fas fa-envelope"></i>
                    <span>Email Templates</span>
                </a>
                <a href="agreement-template.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'agreement-template.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-contract"></i>
                    <span>Agreement</span>
                </a>
                <a href="settings.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) === 'settings.php' ? 'active' : ''; ?>">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span><?php echo htmlspecialchars($_SESSION['admin_name'] ?? 'Admin'); ?></span>
                </div>
                <a href="logout.php" class="logout-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <?php endif; ?>

        <main class="admin-main <?php echo !isLoggedIn() ? 'full-width' : ''; ?>">
            <?php if (isLoggedIn()): ?>
            <header class="admin-header">
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="page-title"><?php echo $pageTitle ?? 'Dashboard'; ?></h1>
                <div class="header-actions">
                    <a href="<?php echo ATS_SITE_URL; ?>" target="_blank" class="btn btn-outline btn-sm">
                        <i class="fas fa-external-link-alt"></i> View Site
                    </a>
                </div>
            </header>
            <?php endif; ?>

            <div class="admin-content">
