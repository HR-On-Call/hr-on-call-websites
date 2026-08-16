    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-dark.webp" alt="<?php echo SITE_NAME; ?>" class="footer-logo">
                    <p>Expert HR consultants delivering remote HR support to businesses across the UK.</p>
                </div>

                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/">Home</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/about.php">About</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>HR Services</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/retainers.php">HR Support Plans</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/workplace-issues.php">Workplace Issues</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pay-as-you-go.php">Projects</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/documents.php">Documents & Drafting</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/blog.php">Employer Guides</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/employment-rights-act">Employment Rights Act 2025</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a></li>
                        <li><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></li>
                        <li><?php echo CONTACT_LOCATION; ?></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 <?php echo COMPANY_NAME; ?>.<br>
                <?php echo COMPANY_NAME; ?> is a company registered in England and Wales under company number <?php echo COMPANY_NUMBER; ?>.<br>
                VAT registration number: <?php echo VAT_NUMBER; ?>.<br>
                Registered office: <?php echo REGISTERED_OFFICE; ?>.</p>
                <p><a href="<?php echo SITE_URL; ?>/privacy-policy.php">Privacy Policy</a> |
                <a href="<?php echo SITE_URL; ?>/cookie-policy.php">Cookie Policy</a></p>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-banner-content">
            <div class="cookie-banner-text">
                <p>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. <a href="<?php echo SITE_URL; ?>/cookie-policy.php">Read our cookie policy</a></p>
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
            </div>
            <div class="cookie-modal-footer">
                <button class="cookie-btn cookie-btn-settings" data-action="reject-cookies">Reject All</button>
                <button class="cookie-btn cookie-btn-accept" data-action="save-cookies">Save Preferences</button>
            </div>
        </div>
    </div>

    <script src="<?php echo SITE_URL; ?>/assets/js/app.js?v=3"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/cookies.js?v=1"></script>

    <?php if (isset($additionalJS)): ?>
        <?php foreach ($additionalJS as $js): ?>
            <script src="<?php echo $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
