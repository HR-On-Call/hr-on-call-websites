<?php
/**
 * Admin Settings
 */

require_once 'includes/auth.php';

requireAuth();

$pageTitle = 'Settings';

$message = '';
$messageType = '';

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $action = $_POST['action'] ?? '';

    if ($action === 'change_password') {
        $currentPassword = $_POST['current_password'] ?? '';
        $newPassword = $_POST['new_password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        // Verify current password
        $db = Database::getInstance();
        $user = $db->fetchOne("SELECT * FROM admin_users WHERE id = ?", [$_SESSION['admin_user_id']]);

        if (!password_verify($currentPassword, $user['password_hash'])) {
            $message = 'Current password is incorrect.';
            $messageType = 'error';
        } elseif (strlen($newPassword) < 8) {
            $message = 'New password must be at least 8 characters.';
            $messageType = 'error';
        } elseif ($newPassword !== $confirmPassword) {
            $message = 'New passwords do not match.';
            $messageType = 'error';
        } else {
            changePassword($_SESSION['admin_user_id'], $newPassword);
            $message = 'Password changed successfully.';
            $messageType = 'success';
        }
    }
}

include 'includes/header.php';
?>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $messageType; ?>">
        <i class="fas fa-<?php echo $messageType === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<div class="detail-grid">
    <!-- Change Password -->
    <div>
        <div class="card">
            <div class="card-header">
                <h2>Change Password</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <?php csrfField(); ?>
                    <input type="hidden" name="action" value="change_password">

                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control" required minlength="8">
                        <small style="color: var(--text-secondary);">Minimum 8 characters</small>
                    </div>

                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-key"></i> Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- System Info -->
    <div>
        <div class="card">
            <div class="card-header">
                <h2>System Information</h2>
            </div>
            <div class="card-body">
                <div class="detail-item">
                    <div class="detail-label">Logged in as</div>
                    <div class="detail-value"><?php echo htmlspecialchars($_SESSION['admin_name']); ?> (<?php echo htmlspecialchars($_SESSION['admin_username']); ?>)</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">PHP Version</div>
                    <div class="detail-value"><?php echo phpversion(); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Server Time</div>
                    <div class="detail-value"><?php echo date('d M Y, H:i:s'); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Upload Directory</div>
                    <div class="detail-value">
                        <?php echo UPLOAD_DIR; ?>
                        <?php if (is_writable(UPLOAD_DIR)): ?>
                            <span class="badge badge-approved">Writable</span>
                        <?php else: ?>
                            <span class="badge badge-rejected">Not Writable</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Configuration</h2>
            </div>
            <div class="card-body">
                <div class="detail-item">
                    <div class="detail-label">Email From</div>
                    <div class="detail-value"><?php echo EMAIL_FROM_ADDRESS; ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Admin Notifications</div>
                    <div class="detail-value"><?php echo ADMIN_NOTIFICATION_EMAIL; ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Max File Size</div>
                    <div class="detail-value"><?php echo (MAX_FILE_SIZE / 1024 / 1024); ?>MB</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Session Lifetime</div>
                    <div class="detail-value"><?php echo (SESSION_LIFETIME / 60); ?> minutes</div>
                </div>
                <p style="margin-top: 1rem; color: var(--text-secondary); font-size: 0.85rem;">
                    <i class="fas fa-info-circle"></i>
                    To change these settings, edit <code>/ats/config.php</code>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
