<?php
/**
 * Edit Agreement for Individual Applicant
 * Allows customizing terms before sending agreement link
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';
require_once dirname(__DIR__) . '/includes/Email.php';

requireAuth();

$applicantModel = new Applicant();
$emailService = new Email();

// Get applicant ID
$id = intval($_GET['id'] ?? 0);

if (!$id) {
    header('Location: applicants.php');
    exit;
}

$applicant = $applicantModel->getById($id);

if (!$applicant) {
    header('Location: applicants.php');
    exit;
}

$pageTitle = 'Edit Agreement - ' . $applicant['full_name'];

// Get template text
$templatePath = dirname(__DIR__) . '/templates/agreement-text.php';
$templateText = '';
if (file_exists($templatePath)) {
    $templateText = include $templatePath;
}

// Use custom text if exists, otherwise use template
$agreementText = !empty($applicant['custom_agreement_text'])
    ? $applicant['custom_agreement_text']
    : $templateText;

$message = '';
$messageType = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $action = $_POST['action'] ?? '';
    $customText = $_POST['agreement_text'] ?? '';

    switch ($action) {
        case 'save':
            // Just save the custom text
            $db = Database::getInstance();
            $db->update('applicants', ['custom_agreement_text' => $customText], 'id = ?', [$id]);
            $applicant = $applicantModel->getById($id);
            $agreementText = $customText;
            $message = 'Agreement text saved.';
            $messageType = 'success';
            break;

        case 'save_and_send':
            // Save custom text and send agreement link
            $db = Database::getInstance();
            $db->update('applicants', ['custom_agreement_text' => $customText], 'id = ?', [$id]);

            // Generate token and send
            $token = $applicantModel->generateAgreementToken($id);
            if ($token) {
                $applicant = $applicantModel->getById($id);
                $result = $emailService->sendApproved($applicant, $token);
                if ($result['success']) {
                    $_SESSION['flash_message'] = 'Agreement saved and sent successfully.';
                    $_SESSION['flash_type'] = 'success';
                    header('Location: applicant.php?id=' . $id);
                    exit;
                } else {
                    $message = 'Agreement saved but failed to send email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Failed to generate agreement token.';
                $messageType = 'error';
            }
            break;

        case 'resend':
            // Save custom text and reset signature data for resigning
            $db = Database::getInstance();
            $db->update('applicants', [
                'custom_agreement_text' => $customText,
                'agreement_signed_at' => null,
                'agreement_pdf_path' => null,
                'status' => 'agreement_sent'
            ], 'id = ?', [$id]);

            // Generate new token and send updated agreement email
            $token = $applicantModel->generateAgreementToken($id);
            if ($token) {
                $applicant = $applicantModel->getById($id);
                $result = $emailService->sendUpdatedAgreement($applicant, $token);
                if ($result['success']) {
                    $_SESSION['flash_message'] = 'Agreement updated and resent successfully.';
                    $_SESSION['flash_type'] = 'success';
                    header('Location: applicant.php?id=' . $id);
                    exit;
                } else {
                    $message = 'Agreement saved but failed to send email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Failed to generate agreement token.';
                $messageType = 'error';
            }
            break;

        case 'reset_to_template':
            // Clear custom text and use template
            $db = Database::getInstance();
            $db->update('applicants', ['custom_agreement_text' => null], 'id = ?', [$id]);
            $applicant = $applicantModel->getById($id);
            $agreementText = $templateText;
            $message = 'Agreement reset to standard template.';
            $messageType = 'success';
            break;
    }
}

$isResend = in_array($applicant['status'], ['agreement_sent']);
$hasCustomText = !empty($applicant['custom_agreement_text']);

include 'includes/header.php';
?>

<style>
.agreement-editor {
    background: #fff;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    padding: 2rem;
}

.agreement-editor textarea {
    width: 100%;
    min-height: 500px;
    font-family: 'Courier New', Consolas, monospace;
    font-size: 13px;
    line-height: 1.5;
    padding: 1rem;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    resize: vertical;
}

.agreement-editor textarea:focus {
    outline: none;
    border-color: var(--pink-accent);
    box-shadow: 0 0 0 3px rgba(219, 39, 119, 0.1);
}

.editor-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--gold-accent);
}

.editor-header h2 {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.applicant-badge {
    background: var(--gold-accent);
    color: var(--text-color);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
}

.editor-info {
    background: #FEF3C7;
    border: 1px solid var(--gold-accent);
    border-radius: var(--border-radius);
    padding: 1rem;
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
}

.editor-info p {
    margin: 0 0 0.5rem 0;
}

.editor-info p:last-child {
    margin-bottom: 0;
}

.editor-info.custom {
    background: #DBEAFE;
    border-color: #3B82F6;
}

.editor-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid var(--border-color);
}

.char-count {
    font-size: 0.8rem;
    color: var(--text-secondary);
    margin-top: 0.5rem;
}
</style>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $messageType; ?>">
        <i class="fas fa-<?php echo $messageType === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<div class="agreement-editor">
    <div class="editor-header">
        <div>
            <h2><i class="fas fa-file-contract"></i> Edit Agreement</h2>
            <span class="applicant-badge"><?php echo htmlspecialchars($applicant['full_name']); ?></span>
        </div>
        <a href="applicant.php?id=<?php echo $id; ?>" class="btn btn-outline btn-sm">
            <i class="fas fa-arrow-left"></i> Back to Applicant
        </a>
    </div>

    <?php if ($hasCustomText): ?>
        <div class="editor-info custom">
            <p><strong><i class="fas fa-edit"></i> Custom Agreement</strong></p>
            <p>This applicant has customized agreement text. Changes here will only apply to this applicant.</p>
        </div>
    <?php else: ?>
        <div class="editor-info">
            <p><strong><i class="fas fa-info-circle"></i> Standard Template</strong></p>
            <p>This is the standard agreement template. Any changes you make here will only apply to this applicant - the master template will not be affected.</p>
        </div>
    <?php endif; ?>

    <form method="POST" action="" id="agreementForm">
        <?php csrfField(); ?>
        <input type="hidden" name="action" value="save" id="formAction">

        <div class="form-group">
            <label for="agreement_text">Agreement Text</label>
            <textarea
                name="agreement_text"
                id="agreement_text"
                required
            ><?php echo htmlspecialchars($agreementText); ?></textarea>
            <div class="char-count">
                <span id="charCount">0</span> characters
                <?php if ($hasCustomText): ?>
                    | <span style="color: #3B82F6;">Custom text for this applicant</span>
                <?php endif; ?>
            </div>
        </div>

        <div class="editor-actions">
            <button type="button" class="btn btn-secondary" onclick="submitForm('save')">
                <i class="fas fa-save"></i> Save Draft
            </button>

            <?php if ($isResend): ?>
                <button type="button" class="btn btn-primary" onclick="submitForm('resend')">
                    <i class="fas fa-paper-plane"></i> Save & Resend Agreement
                </button>
            <?php else: ?>
                <button type="button" class="btn btn-success" onclick="submitForm('save_and_send')">
                    <i class="fas fa-paper-plane"></i> Save & Send Agreement
                </button>
            <?php endif; ?>

            <?php if ($hasCustomText): ?>
                <button type="button" class="btn btn-outline" onclick="if(confirm('Reset to standard template? Your custom changes will be lost.')) submitForm('reset_to_template')">
                    <i class="fas fa-undo"></i> Reset to Template
                </button>
            <?php endif; ?>
        </div>
    </form>
</div>

<script>
// Character count
const textarea = document.getElementById('agreement_text');
const charCount = document.getElementById('charCount');

function updateCharCount() {
    charCount.textContent = textarea.value.length.toLocaleString();
}

textarea.addEventListener('input', updateCharCount);
updateCharCount();

// Warn before leaving with unsaved changes
let originalContent = textarea.value;
let hasChanges = false;

textarea.addEventListener('input', function() {
    hasChanges = (textarea.value !== originalContent);
});

window.addEventListener('beforeunload', function(e) {
    if (hasChanges) {
        e.preventDefault();
        e.returnValue = '';
    }
});

// Form submission - clear hasChanges before submitting
function submitForm(action) {
    hasChanges = false;
    document.getElementById('formAction').value = action;
    document.getElementById('agreementForm').submit();
}
</script>

<?php include 'includes/footer.php'; ?>
