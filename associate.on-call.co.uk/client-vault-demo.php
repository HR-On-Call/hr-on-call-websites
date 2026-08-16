<?php
require_once 'config.php';

$pageTitle = 'Client Vault Demo Guide';
$pageDescription = 'Welcome to your Client Vault demo account. Learn how to explore the platform and what features are available.';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-client-vault-navy.webp" alt="The Client Vault">
            </div>
            <h1>Welcome to Your Client Vault Demo</h1>
            <p class="hero-subtitle">You'll receive an email inviting you to set your password. Once set, you can log into your demo account and explore the platform.</p>
            <div class="hero-buttons">
                <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="btn btn-primary">Sign Up Now</a>
                <a href="<?php echo SITE_URL; ?>/book-a-call.php" class="btn btn-secondary">Book a Call</a>
            </div>
        </div>
    </div>
</section>

<!-- What You Can Do Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-header">
            <h2>What You Can Do in the Demo</h2>
        </div>

        <div class="features-grid features-grid-3">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-search"></i></div>
                <h3>Browse the Platform</h3>
                <p>Navigate through the document library exactly as your clients will experience it. The demo contains sample documents so you can see the interface and functionality in action.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                <h3>Explore Admin Settings</h3>
                <p>Access the 'Admin' panel to see the management features available to you, including client account management, branding options and usage statistics.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-list"></i></div>
                <h3>View the Document List</h3>
                <p><a href="<?php echo SITE_URL; ?>/client-vault-documents.php">See the full document list</a> - View everything that will be included in your live Client Vault.</p>
            </div>
        </div>

        <div class="intro-text" style="margin-top: 2rem; text-align: center;">
            <p><strong>Please note:</strong> The demo platform contains sample documents for demonstration purposes only. Your live platform will include the full library of professionally written HR documents.</p>
        </div>
    </div>
</section>

<!-- Document Library Section -->
<section class="section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>Document Library</h2>
            <p>Your Client Vault includes two types of documents</p>
        </div>

        <div class="revenue-grid">
            <div class="revenue-card">
                <div class="revenue-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Core Documents</h3>
                <p>Included as standard when your platform goes live. These cover essential HR needs and are suitable for your clients to use with minimal guidance.</p>
                <a href="<?php echo SITE_URL; ?>/client-vault-documents.php#core" class="card-link">View Documents <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="revenue-card">
                <div class="revenue-icon"><i class="fas fa-folder-plus"></i></div>
                <h3>Optional Documents</h3>
                <p>Available on request. These cover more complex situations where guidance may be beneficial. Request them if you're confident your clients will use them appropriately.</p>
                <a href="<?php echo SITE_URL; ?>/client-vault-documents.php#optional" class="card-link">View Documents <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Managing Your Platform Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-header">
            <h2>Managing Your Live Platform</h2>
            <p>Once live, you can</p>
        </div>

        <div class="features-grid features-grid-3">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-upload"></i></div>
                <h3>Add Documents</h3>
                <p>Upload your own templates and resources at any time to complement the standard library.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-users"></i></div>
                <h3>Manage Users</h3>
                <p>Add and remove client accounts via the Admin panel. Control who has access to your platform.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-palette"></i></div>
                <h3>Update Branding</h3>
                <p>Change your logo and colours whenever you need to keep your platform aligned with your brand.</p>
            </div>
        </div>
    </div>
</section>

<!-- Upgrading Section -->
<section class="section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>Upgrading Your Tier</h2>
        </div>
        <div class="intro-text">
            <p>Need more client accounts? Complete the upgrade request form in your Admin dashboard and we'll process your tier change.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Go Live?</h2>
            <p>If you'd like to proceed with your own branded Client Vault, please complete the sign-up form.</p>
            <div class="cta-buttons">
                <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="btn btn-primary">Complete Sign-Up Form</a>
                <a href="<?php echo SITE_URL; ?>/the-client-vault.php" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
