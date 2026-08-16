<?php
/**
 * Manually Add Applicant
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';

requireAuth();

$pageTitle = 'Add Applicant';

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $fullName = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (empty($fullName) || empty($email)) {
        $message = 'Name and email are required.';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
        $messageType = 'error';
    } else {
        $applicantModel = new Applicant();
        $existing = $applicantModel->getByEmail($email);
        if ($existing) {
            $message = 'An applicant with this email already exists.';
            $messageType = 'error';
        } else {
            $applicantData = [
                'full_name' => $fullName,
                'email' => $email,
                'phone' => trim($_POST['phone'] ?? ''),
                'location' => trim($_POST['location'] ?? ''),
                'cipd_level' => $_POST['cipd_level'] ?? 'none',
                'years_experience' => $_POST['years_experience'] ?? '0',
                'work_situation' => $_POST['work_situation'] ?? '',
                'primary_specialism' => $_POST['primary_specialism'] ?? 'general_hr_advisory',
                'experience_summary' => trim($_POST['experience_summary'] ?? ''),
                'has_pi_insurance' => $_POST['has_pi_insurance'] ?? 'no',
                'linkedin_url' => trim($_POST['linkedin_url'] ?? '') ?: null,
                'vat_registered' => isset($_POST['vat_registered']) ? (int)$_POST['vat_registered'] : 0,
                'hourly_rate' => (float)($_POST['hourly_rate'] ?? 0),
                'self_employed_confirmed' => 0,
                'consent_confirmed' => 0,
                'status' => 'new'
            ];

            try {
                $applicantId = $applicantModel->create($applicantData);
                $applicantModel->logActivity($applicantId, 'manually_added', [
                    'added_by' => $_SESSION['admin_name'] ?? 'Admin'
                ]);
                header('Location: applicant.php?id=' . $applicantId);
                exit;
            } catch (Exception $e) {
                $message = 'Error adding applicant: ' . $e->getMessage();
                $messageType = 'error';
            }
        }
    }
}

include 'includes/header.php';
?>

<div class="card" style="max-width: 600px;">
    <div class="card-header">
        <h2>Add Applicant</h2>
    </div>
    <div class="card-body">
        <?php if ($message): ?>
            <div class="alert alert-<?php echo $messageType; ?>" style="margin-bottom: 1rem;">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">Add someone manually so you can send them an agreement directly.</p>

        <form method="POST">
            <?php csrfField(); ?>

            <div class="form-group">
                <label>Full Name <span style="color: var(--danger);">*</span></label>
                <input type="text" name="full_name" class="form-control" required
                       value="<?php echo htmlspecialchars($_POST['full_name'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label>Email <span style="color: var(--danger);">*</span></label>
                <input type="email" name="email" class="form-control" required
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>

            <details style="margin-top: 1rem; margin-bottom: 1rem;">
                <summary style="cursor: pointer; color: var(--pink-accent); font-weight: 500; margin-bottom: 1rem;">Additional Details</summary>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" name="phone" class="form-control"
                           value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control"
                           value="<?php echo htmlspecialchars($_POST['location'] ?? ''); ?>">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Primary Specialism</label>
                        <select name="primary_specialism" class="form-control">
                            <option value="general_hr_advisory">General HR Advisory</option>
                            <option value="employee_relations">Employee Relations</option>
                            <option value="workplace_investigations">Workplace Investigations</option>
                            <option value="employment_law">Employment Law</option>
                            <option value="settlement_agreements">Settlement Agreements</option>
                            <option value="hr_administration">HR Administration</option>
                            <option value="talent_recruitment">Talent &amp; Recruitment</option>
                            <option value="hris_systems">HRIS &amp; Systems</option>
                            <option value="learning_development">Learning &amp; Development</option>
                            <option value="reward_benefits">Reward &amp; Benefits</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>CIPD Level</label>
                        <select name="cipd_level" class="form-control">
                            <option value="none">Not CIPD qualified</option>
                            <option value="level_3">Level 3</option>
                            <option value="level_5">Level 5</option>
                            <option value="level_7">Level 7</option>
                            <option value="other">Other qualification</option>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Years Experience</label>
                        <input type="text" name="years_experience" class="form-control"
                               value="<?php echo htmlspecialchars($_POST['years_experience'] ?? ''); ?>">
                    </div>

                    <div class="form-group">
                        <label>Hourly Rate (&pound;)</label>
                        <input type="number" name="hourly_rate" class="form-control" step="0.01" min="0"
                               value="<?php echo htmlspecialchars($_POST['hourly_rate'] ?? ''); ?>">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Work Situation</label>
                        <select name="work_situation" class="form-control">
                            <option value="">-- Select --</option>
                            <option value="freelance_consultant">Freelance Consultant</option>
                            <option value="employed_looking">Employed, looking to move</option>
                            <option value="between_roles">Between roles</option>
                            <option value="portfolio_career">Portfolio career</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>PI Insurance</label>
                        <select name="has_pi_insurance" class="form-control">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                            <option value="willing">Willing to get</option>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>VAT Registered</label>
                        <select name="vat_registered" class="form-control">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div></div>
                </div>

                <div class="form-group">
                    <label>LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control"
                           value="<?php echo htmlspecialchars($_POST['linkedin_url'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Experience Summary</label>
                    <textarea name="experience_summary" class="form-control" rows="4"><?php echo htmlspecialchars($_POST['experience_summary'] ?? ''); ?></textarea>
                </div>
            </details>

            <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Applicant
                </button>
                <a href="applicants.php" class="btn btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
