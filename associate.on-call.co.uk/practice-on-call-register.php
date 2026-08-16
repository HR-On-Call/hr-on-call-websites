<?php
require_once 'config.php';

$pageTitle = 'Register Interest - Practice On Call';
$pageDescription = 'Register your interest in Practice On Call, the CRM built for HR consultancies. Be the first to know when pricing is announced and early access becomes available.';
$pageKeywords = 'HR CRM, HR consultancy software, practice management, register interest, early access';

// Handle success/error states
$success = isset($_GET['success']);
$error = isset($_GET['error']);
$errorMessage = '';

if ($error) {
    if ($_GET['error'] === 'send') {
        $errorMessage = 'There was a problem submitting your registration. Please try again or email us directly at grace@on-call.co.uk';
    } else {
        $errorMessage = 'Please check the form and try again.';
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <h1>Register Interest</h1>
            <p class="hero-subtitle">Be the first to know when Practice On Call launches. We'll notify you when pricing is announced and early access becomes available.</p>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="section bg-light">
    <div class="container">
        <div class="form-container">
            <?php if ($success): ?>
                <div class="success-message">
                    <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                    <h2>Thank You for Registering</h2>
                    <p>We've received your interest in Practice On Call. We'll be in touch when pricing is announced and early access becomes available.</p>
                    <a href="<?php echo SITE_URL; ?>/practice-on-call.php" class="btn btn-secondary">Back to Practice On Call</a>
                </div>
            <?php else: ?>

                <?php if ($errorMessage): ?>
                    <div class="error-message">
                        <p><?php echo htmlspecialchars($errorMessage); ?></p>
                    </div>
                <?php endif; ?>

                <form class="interest-form" action="process-practice-interest" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="company">Consultancy Name</label>
                        <input type="text" id="company" name="company">
                    </div>

                    <div class="form-group">
                        <label for="team_size">Team Size</label>
                        <select id="team_size" name="team_size">
                            <option value="">Select...</option>
                            <option value="solo">Solo consultant</option>
                            <option value="2-5">2-5 people</option>
                            <option value="6-10">6-10 people</option>
                            <option value="11+">11+ people</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Anything else you'd like us to know?</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>

                    <div class="form-group form-group-checkbox">
                        <label class="checkbox-label">
                            <input type="checkbox" name="consent" id="consent" required>
                            <span class="checkbox-text">I consent to HR On Call contacting me with updates about Practice On Call. We'll only contact you about Practice On Call updates and launch information. You can unsubscribe at any time. See our <a href="<?php echo SITE_URL; ?>/privacy-policy.php" target="_blank">Privacy Policy</a>.</span>
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Register Interest</button>
                    </div>
                </form>

            <?php endif; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
