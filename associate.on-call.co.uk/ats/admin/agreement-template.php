<?php
/**
 * Agreement Template Editor
 */

require_once 'includes/auth.php';
requireAuth();

$pageTitle = 'Agreement Template';
$templatePath = dirname(__DIR__) . '/templates/agreement-text.php';

$message = '';
$messageType = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $newContent = $_POST['agreement_text'] ?? '';

    if (!empty($newContent)) {
        // Create the PHP file content
        $phpContent = '<?php
/**
 * Associate Agreement Template
 *
 * This is the full agreement text displayed on the signing page.
 * The associate\'s details are collected via the form and displayed
 * separately in the header section of the signing page.
 *
 * Last updated: ' . date('Y-m-d H:i:s') . '
 */

$agreementText = <<<\'AGREEMENT\'
' . $newContent . '
AGREEMENT;

return $agreementText;
';

        if (file_put_contents($templatePath, $phpContent)) {
            $message = 'Agreement template updated successfully.';
            $messageType = 'success';
        } else {
            $message = 'Failed to save template. Check file permissions.';
            $messageType = 'error';
        }
    } else {
        $message = 'Agreement text cannot be empty.';
        $messageType = 'error';
    }
}

// Get current template content
$currentText = '';
if (file_exists($templatePath)) {
    $agreementText = include $templatePath;
    $currentText = $agreementText;
}

include 'includes/header.php';
?>

<style>
.template-editor {
    background: #fff;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    padding: 2rem;
}

.template-editor textarea {
    width: 100%;
    min-height: 600px;
    font-family: 'Courier New', Consolas, monospace;
    font-size: 13px;
    line-height: 1.5;
    padding: 1rem;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    resize: vertical;
}

.template-editor textarea:focus {
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

.editor-actions {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
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

<div class="template-editor">
    <div class="editor-header">
        <h2><i class="fas fa-file-contract"></i> Agreement Template</h2>
        <a href="applicants.php" class="btn btn-outline btn-sm">
            <i class="fas fa-arrow-left"></i> Back to Applicants
        </a>
    </div>

    <div class="editor-info">
        <p><strong><i class="fas fa-info-circle"></i> About this template:</strong></p>
        <p>This is the Associate Agreement text that appears on the signing page when associates sign their agreement electronically. The associate's business details (name, address, company number, VAT) are collected via a form and displayed separately.</p>
        <p>Changes are saved immediately when you click "Save Changes".</p>
    </div>

    <form method="POST" action="">
        <?php csrfField(); ?>

        <div class="form-group">
            <label for="agreement_text">Agreement Text</label>
            <textarea
                name="agreement_text"
                id="agreement_text"
                required
                placeholder="Enter the full agreement text..."
            ><?php echo htmlspecialchars($currentText); ?></textarea>
            <div class="char-count">
                <span id="charCount">0</span> characters
            </div>
        </div>

        <div class="editor-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Changes
            </button>
            <button type="button" class="btn btn-outline" onclick="if(confirm('Are you sure you want to reset to the last saved version?')) location.reload();">
                <i class="fas fa-undo"></i> Reset Changes
            </button>
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

document.querySelector('form').addEventListener('submit', function() {
    hasChanges = false;
});
</script>

<?php include 'includes/footer.php'; ?>
