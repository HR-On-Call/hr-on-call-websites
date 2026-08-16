<?php
require_once 'config.php';

$pageTitle = 'Thank You';
$pageDescription = 'Thank you for registering your interest in joining the HR On Call associate network.';
?>

<?php include 'includes/header.php'; ?>

<section class="section thanks-section bg-dark">
    <div class="container">
        <div class="thanks-content">
            <div class="thanks-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>We've Received Your Details</h2>
            <p>Thank you for your interest in joining the HR On Call associate network.</p>
            <p>We'll review your application and be in touch if there's a potential fit. You should receive an acknowledgement email shortly.</p>
            <p>If you have any questions in the meantime, please don't hesitate to <a href="<?php echo SITE_URL; ?>/contact.php">get in touch</a>.</p>
            <a href="<?php echo SITE_URL; ?>" class="btn btn-primary">Return to Homepage</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
