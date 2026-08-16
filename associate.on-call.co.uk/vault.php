<?php
require_once 'config.php';

$pageTitle = 'Vault';
$pageDescription = 'Explore our vault services - The HR Vault for professional HR documents and The Client Vault for white-label document platforms.';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
?>

<?php include 'includes/header.php'; ?>

<div class="oc">

    <!-- Hero Section -->
    <section class="oc-hero">
        <div class="oc-wrap">
            <div class="oc-eyebrow"><span></span> Vault Solutions</div>
            <h1>Our Vault Solutions</h1>
            <p>Professional HR documents and white-label platforms to enhance your consultancy</p>
        </div>
    </section>

    <!-- Vault Options Section -->
    <section class="oc-sec">
        <div class="oc-wrap">
            <div class="oc-grid2">
                <!-- The HR Vault -->
                <div class="oc-card">                    <img src="<?php echo SITE_URL; ?>/assets/images/logo-hr-vault-navy.webp" alt="The HR Vault" style="max-height:44px;width:auto;margin-bottom:14px;align-self:flex-start;">
                    <p class="vault-tagline" style="color:var(--navy);font-weight:600;margin:0 0 10px;">Professional HR Documents at Your Fingertips</p>
                    <p>Access hundreds of customisable HR templates through subscription or bundles. Contracts, policies, handbooks, letters and more &ndash; all regularly updated for legislative changes.</p>
                    <ul class="oc-ticklist" style="margin:18px 0 22px;">
                        <li>Fully customisable Word format templates</li>
                        <li>Regularly updated for legislative changes</li>
                        <li>Formal and informal tone options</li>
                        <li>Included free with retainer packages</li>
                    </ul>
                    <div class="oc-actions" style="margin-top:auto;">
                        <a href="https://www.thehrvault.co.uk" class="oc-btn oc-pink" target="_blank" rel="noopener">Visit The HR Vault</a>
                    </div>
                </div>

                <!-- The Client Vault -->
                <div class="oc-card">                    <img src="<?php echo SITE_URL; ?>/assets/images/logo-client-vault-navy.webp" alt="The Client Vault" style="max-height:44px;width:auto;margin-bottom:14px;align-self:flex-start;">
                    <p class="vault-tagline" style="color:var(--navy);font-weight:600;margin:0 0 10px;">Your Own Branded HR Document Platform</p>
                    <p>Give your clients access to professional HR documents through your own white-label platform. Add value to retainers and create recurring revenue with your own professional resource hub.</p>
                    <ul class="oc-ticklist" style="margin:18px 0 22px;">
                        <li>Custom branding with your logo and colours</li>
                        <li>Secure, password-protected client access</li>
                        <li>Simple management dashboard</li>
                        <li>Create recurring revenue streams</li>
                    </ul>
                    <div class="oc-actions" style="margin-top:auto;">
                        <a href="<?php echo SITE_URL; ?>/the-client-vault.php" class="oc-btn oc-pink">Learn More</a>
                        <a href="<?php echo SITE_URL; ?>/contact.php#book-call" class="oc-btn oc-ghost">Book a Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="oc-sec oc-cta">
        <div class="oc-wrap">
            <div class="oc-head center">
                <h2>Not Sure Which Vault Is Right for You?</h2>
                <p>Get in touch and we'll help you find the perfect solution for your consultancy.</p>
            </div>
            <div class="oc-actions" style="justify-content:center;">
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Contact Us</a>
            </div>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>
