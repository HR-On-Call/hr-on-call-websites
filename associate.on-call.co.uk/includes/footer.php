    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-dark.webp?v=2" alt="<?php echo SITE_NAME; ?>" class="footer-logo">
                    <p>Expert HR support when you need it.</p>
                </div>

                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/about.php">About</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/associate-on-call.php">Associate On Call</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/booking.php">Book a Call with Grace</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Digital Solutions</h4>
                    <ul>
                        <li><a href="https://www.thehrvault.co.uk" target="_blank" rel="noopener">The HR Vault</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/the-client-vault.php">The Client Vault</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="https://www.on-call.co.uk/terms.php" target="_blank" rel="noopener">Terms of Service</a></li>
                        <li><a href="#" data-action="cookie-preferences">Cookie Preferences</a></li>
                        <li><a href="https://billing.stripe.com/p/login/4gM14ndra9kdgdR33g2ZO00" target="_blank" rel="noopener"><i class="fas fa-credit-card"></i> Manage Subscription</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 <a href="<?php echo SITE_URL; ?>"><?php echo COMPANY_NAME; ?></a>.<br>
                <?php echo COMPANY_NAME; ?> is a company registered in England and Wales under company number <?php echo COMPANY_NUMBER; ?>.<br>
                VAT registration number: 515981373.<br>
                Registered office: 3 Pethill Close, Plymouth, PL6 8NL.</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-banner-content">
            <div class="cookie-banner-text">
                <p>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. <a href="<?php echo SITE_URL; ?>/cookie-policy.php">Learn more</a></p>
            </div>
            <div class="cookie-banner-buttons">
                <button class="cookie-btn cookie-btn-accept" data-action="accept-cookies">Accept All</button>
                <button class="cookie-btn cookie-btn-settings" data-action="cookie-settings">Manage Settings</button>
                <button class="cookie-btn cookie-btn-reject" data-action="reject-cookies">Reject All</button>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Modal -->
    <div id="cookie-modal" class="cookie-modal">
        <div class="cookie-modal-content">
            <div class="cookie-modal-header">
                <h3>Cookie Preferences</h3>
                <button class="cookie-modal-close" data-action="close-modal">&times;</button>
            </div>
            <div class="cookie-modal-body">
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Necessary Cookies</h4>
                        <label class="cookie-toggle">
                            <input type="checkbox" checked disabled>
                            <span class="cookie-toggle-slider"></span>
                        </label>
                    </div>
                    <p>These cookies are essential for the website to function properly and cannot be disabled.</p>
                </div>
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Analytics Cookies</h4>
                        <label class="cookie-toggle">
                            <input type="checkbox" id="cookie-analytics">
                            <span class="cookie-toggle-slider"></span>
                        </label>
                    </div>
                    <p>These cookies help us understand how visitors interact with our website by collecting anonymous information.</p>
                </div>
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Marketing Cookies</h4>
                        <label class="cookie-toggle">
                            <input type="checkbox" id="cookie-marketing">
                            <span class="cookie-toggle-slider"></span>
                        </label>
                    </div>
                    <p>These cookies are used to deliver personalised advertisements and track their effectiveness.</p>
                </div>
            </div>
            <div class="cookie-modal-footer">
                <button class="cookie-btn cookie-btn-settings" data-action="reject-cookies">Reject All</button>
                <button class="cookie-btn cookie-btn-accept" data-action="save-cookies">Save Preferences</button>
            </div>
        </div>
    </div>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "<?php echo SITE_NAME; ?>",
        "description": "Expert HR support for HR consultancies. Associate cover, professional tools and white-label solutions from a team of CIPD-qualified consultants.",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-dark.webp?v=2",
        "image": "<?php echo SITE_URL; ?>/assets/images/associate-on-call-og.png",
        "telephone": "01752 425526",
        "email": "hello@on-call.co.uk",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3 Pethill Close",
            "addressLocality": "Plymouth",
            "addressRegion": "Devon",
            "postalCode": "PL6 8NL",
            "addressCountry": "GB"
        },
        "founder": {
            "@type": "Person",
            "name": "Grace Pariser",
            "jobTitle": "Founder & Lead Consultant"
        },
        "areaServed": {
            "@type": "Country",
            "name": "United Kingdom"
        },
        "serviceType": ["HR Consulting", "HR Support", "HR Documents", "Employment Law Advisory", "HR Compliance Audits"],
        "priceRange": "$$",
        "sameAs": [
            "https://www.linkedin.com/company/hr-on-call-ltd"
        ]
    }
    </script>

    <script src="<?php echo SITE_URL; ?>/assets/js/app.js?v=1"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/cookies.js?v=1"></script>

    <?php if (isset($additionalJS)): ?>
        <?php foreach ($additionalJS as $js): ?>
            <script src="<?php echo $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
