<?php
/**
 * Email Templates Management
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Email.php';

requireAuth();

$pageTitle = 'Email Templates';

$emailService = new Email();

$message = '';
$messageType = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $action = $_POST['action'] ?? '';

    if ($action === 'update_template') {
        $templateKey = $_POST['template_key'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $body = $_POST['body'] ?? '';

        if ($templateKey && $subject && $body) {
            $emailService->updateTemplate($templateKey, $subject, $body);
            $message = 'Template updated successfully.';
            $messageType = 'success';
        } else {
            $message = 'Please fill in all fields.';
            $messageType = 'error';
        }
    }
}

// Get all templates
$templates = $emailService->getAllTemplates();

// Get specific template for preview
$previewTemplate = null;
$previewHtml = null;
if (isset($_GET['preview'])) {
    $previewTemplate = $emailService->getTemplate($_GET['preview']);
    if ($previewTemplate) {
        // Generate preview with sample data
        $sampleVars = [
            'first_name' => 'Sarah',
            'full_name' => 'Sarah Johnson',
            'rejection_reason' => 'the work we typically handle requires specific experience in employee relations.',
            'booking_button' => '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 8px 0 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="#" style="display: inline-block; padding: 12px 24px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Book Your Call</a></td></tr></table>',
            'agreement_button' => '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="#" style="display: inline-block; padding: 14px 28px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Review & Sign Agreement</a></td></tr></table>',
            'signing_link' => 'https://associate.on-call.co.uk/sign/example-token'
        ];

        $parsed = $emailService->parseTemplate($previewTemplate, $sampleVars);

        // Use reflection to call private wrapInTemplate method for preview
        $reflection = new ReflectionClass($emailService);
        $method = $reflection->getMethod('wrapInTemplate');
        $method->setAccessible(true);
        $previewHtml = $method->invoke($emailService, $parsed['body']);
    }
}

// Get template for editing
$editTemplate = null;
if (isset($_GET['edit'])) {
    $editTemplate = $emailService->getTemplate($_GET['edit']);
}

include 'includes/header.php';
?>

<style>
.preview-frame {
    width: 100%;
    height: 600px;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    background: #f5f5f5;
}
.template-actions {
    display: flex;
    gap: 0.5rem;
}
.modal-large .modal-content {
    max-width: 700px;
}
</style>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $messageType; ?>">
        <i class="fas fa-<?php echo $messageType === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<?php if ($previewTemplate && $previewHtml): ?>
    <!-- Preview Mode -->
    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Preview: <?php echo htmlspecialchars($previewTemplate['name']); ?></h2>
            <div style="display: flex; gap: 0.5rem;">
                <a href="?edit=<?php echo htmlspecialchars($previewTemplate['template_key']); ?>" class="btn btn-outline btn-sm">
                    <i class="fas fa-edit"></i> Edit Template
                </a>
                <a href="templates.php" class="btn btn-outline btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        <div class="card-body">
            <p style="margin-bottom: 1rem;"><strong>Subject:</strong> <?php echo htmlspecialchars($previewTemplate['subject']); ?></p>
            <iframe class="preview-frame" srcdoc="<?php echo htmlspecialchars($previewHtml); ?>"></iframe>
        </div>
    </div>

<?php elseif ($editTemplate): ?>
    <!-- Edit Mode -->
    <div class="detail-grid">
        <div>
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h2>Edit: <?php echo htmlspecialchars($editTemplate['name']); ?></h2>
                    <a href="templates.php" class="btn btn-outline btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <?php csrfField(); ?>
                        <input type="hidden" name="action" value="update_template">
                        <input type="hidden" name="template_key" value="<?php echo htmlspecialchars($editTemplate['template_key']); ?>">

                        <div class="form-group">
                            <label>Subject Line</label>
                            <input type="text" name="subject" class="form-control" value="<?php echo htmlspecialchars($editTemplate['subject']); ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Email Body</label>
                            <textarea name="body" class="form-control" rows="20" required style="font-family: monospace; font-size: 13px;"><?php echo htmlspecialchars($editTemplate['body']); ?></textarea>
                        </div>

                        <div style="display: flex; gap: 0.5rem;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Save Changes
                            </button>
                            <a href="?preview=<?php echo htmlspecialchars($editTemplate['template_key']); ?>" class="btn btn-outline">
                                <i class="fas fa-eye"></i> Preview
                            </a>
                            <a href="templates.php" class="btn btn-outline">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div>
            <!-- Available Variables -->
            <div class="card">
                <div class="card-header">
                    <h2>Available Variables</h2>
                </div>
                <div class="card-body">
                    <p style="margin-bottom: 1rem; color: var(--text-secondary);">Use these in your template:</p>
                    <table class="table">
                        <tr>
                            <td><code>{{first_name}}</code></td>
                            <td>First name</td>
                        </tr>
                        <tr>
                            <td><code>{{full_name}}</code></td>
                            <td>Full name</td>
                        </tr>
                        <tr>
                            <td><code>{{agreement_button}}</code></td>
                            <td>Sign agreement button</td>
                        </tr>
                        <tr>
                            <td><code>{{signing_link}}</code></td>
                            <td>Plain text signing URL</td>
                        </tr>
                        <tr>
                            <td><code>{{booking_button}}</code></td>
                            <td>Cal.com booking button</td>
                        </tr>
                        <tr>
                            <td><code>{{rejection_reason}}</code></td>
                            <td>Rejection reason text</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <!-- List Mode -->
    <div class="card">
        <div class="card-header">
            <h2>Email Templates</h2>
        </div>
        <div class="card-body" style="padding: 0;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Template</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templates as $template): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($template['name']); ?></strong></td>
                                <td><?php echo htmlspecialchars($template['subject']); ?></td>
                                <td>
                                    <div class="template-actions">
                                        <a href="?preview=<?php echo htmlspecialchars($template['template_key']); ?>" class="btn btn-primary btn-sm" style="color: #fff;">
                                            <i class="fas fa-eye"></i> Preview
                                        </a>
                                        <a href="?edit=<?php echo htmlspecialchars($template['template_key']); ?>" class="btn btn-outline btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
