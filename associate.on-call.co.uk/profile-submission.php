<?php
session_start();
require_once 'config.php';
require_once 'ats/config.php';
require_once 'ats/includes/Database.php';
require_once 'ats/includes/Applicant.php';

$pageTitle = 'Submit Your Profile';
$pageDescription = 'Submit your profile details and headshot for the HR On Call website.';

$token = $_GET['token'] ?? $_POST['token'] ?? '';
$submitted = false;
$error = null;
$applicant = null;

// Validate token
if (!empty($token)) {
    $db = Database::getInstance();
    $applicant = $db->fetchOne(
        "SELECT * FROM applicants WHERE agreement_token = ? OR profile_token = ?",
        [$token, $token]
    );

    if (!$applicant) {
        $error = 'Invalid or expired link. Please contact Grace if you need assistance.';
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $applicant) {
    $errors = [];

    // Validate required fields
    $requiredFields = [
        'display_name' => 'Full name and qualifications',
        'specialisms' => 'HR specialisms',
        'years_experience' => 'Years of experience',
        'background' => 'Professional background',
        'enjoys' => 'What you enjoy about HR',
        'display_location' => 'Location'
    ];

    foreach ($requiredFields as $field => $label) {
        if ($field === 'specialisms') {
            if (empty($_POST['specialisms']) || !is_array($_POST['specialisms'])) {
                $errors[] = $label . ' is required';
            }
        } elseif (empty(trim($_POST[$field] ?? ''))) {
            $errors[] = $label . ' is required';
        }
    }

    // Handle headshot upload
    $headshotPath = null;
    if (isset($_FILES['headshot']) && $_FILES['headshot']['error'] === UPLOAD_ERR_OK) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        $maxSize = 5 * 1024 * 1024; // 5MB

        if (!in_array($_FILES['headshot']['type'], $allowedTypes)) {
            $errors[] = 'Headshot must be a JPG, PNG or WebP image';
        } elseif ($_FILES['headshot']['size'] > $maxSize) {
            $errors[] = 'Headshot must be under 5MB';
        } else {
            $uploadDir = __DIR__ . '/ats/uploads/headshots/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $ext = pathinfo($_FILES['headshot']['name'], PATHINFO_EXTENSION);
            $filename = 'headshot-' . $applicant['id'] . '-' . time() . '.' . $ext;
            $headshotPath = $uploadDir . $filename;

            if (!move_uploaded_file($_FILES['headshot']['tmp_name'], $headshotPath)) {
                $errors[] = 'Failed to upload headshot. Please try again.';
                $headshotPath = null;
            }
        }
    }

    if (empty($errors)) {
        // Save profile data
        $specialisms = implode(', ', $_POST['specialisms']);

        $profileData = [
            'profile_display_name' => trim($_POST['display_name']),
            'profile_specialisms' => $specialisms,
            'profile_years_experience' => trim($_POST['years_experience']),
            'profile_background' => trim($_POST['background']),
            'profile_enjoys' => trim($_POST['enjoys']),
            'profile_location' => trim($_POST['display_location']),
            'profile_submitted_at' => date('Y-m-d H:i:s')
        ];

        if ($headshotPath) {
            $profileData['profile_headshot'] = $headshotPath;
        }

        $db->update('applicants', $profileData, 'id = ?', [$applicant['id']]);

        // Send notification to admin
        $adminSubject = 'Profile Submitted: ' . $applicant['full_name'];
        $adminUrl = ATS_ADMIN_URL . '/applicant.php?id=' . $applicant['id'];
        $adminLink = '<a href="' . $adminUrl . '" style="color: #DB2777; text-decoration: none;">View in Admin</a>';

        $adminBody = "<p>A new associate profile has been submitted.</p>

<table style=\"margin: 16px 0; font-size: 15px; line-height: 1.8; color: #2D3748;\">
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Name:</strong></td><td>" . htmlspecialchars($applicant['full_name']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Display Name:</strong></td><td>" . htmlspecialchars($profileData['profile_display_name']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Specialisms:</strong></td><td>" . htmlspecialchars($specialisms) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Years Experience:</strong></td><td>" . htmlspecialchars($profileData['profile_years_experience']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Background:</strong></td><td>" . htmlspecialchars($profileData['profile_background']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Enjoys:</strong></td><td>" . htmlspecialchars($profileData['profile_enjoys']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Location:</strong></td><td>" . htmlspecialchars($profileData['profile_location']) . "</td></tr>
<tr><td style=\"padding-right: 16px; vertical-align: top;\"><strong>Headshot:</strong></td><td>" . ($headshotPath ? 'Uploaded' : 'Not uploaded') . "</td></tr>
</table>

<p>{$adminLink}</p>";

        require_once 'ats/includes/Email.php';
        $email = new Email();
        $email->send(ADMIN_NOTIFICATION_EMAIL, 'Grace Pariser', $adminSubject, $adminBody);

        $submitted = true;
    } else {
        $error = implode('<br>', $errors);
    }
}

include 'includes/header.php';
?>

<section class="section form-section">
    <div class="container">
        <?php if ($submitted): ?>
            <div class="success-message" style="text-align: center; padding: 60px 20px;">
                <div style="font-size: 64px; color: #10B981; margin-bottom: 20px;"><i class="fas fa-check-circle"></i></div>
                <h1 style="margin-bottom: 16px;">Thank You!</h1>
                <p style="font-size: 18px; color: #4A5568; max-width: 500px; margin: 0 auto;">Your profile has been submitted successfully. We'll add you to the website shortly.</p>
            </div>
        <?php elseif ($error && !$applicant): ?>
            <div class="error-message" style="text-align: center; padding: 60px 20px;">
                <div style="font-size: 64px; color: #EF4444; margin-bottom: 20px;"><i class="fas fa-exclamation-circle"></i></div>
                <h1 style="margin-bottom: 16px;">Invalid Link</h1>
                <p style="font-size: 18px; color: #4A5568;"><?php echo $error; ?></p>
                <p style="margin-top: 20px;"><a href="mailto:grace@on-call.co.uk" class="btn btn-primary">Contact Grace</a></p>
            </div>
        <?php elseif ($applicant): ?>
            <div class="section-header">
                <h1>Submit Your Profile</h1>
                <p>Hi <?php echo htmlspecialchars(explode(' ', $applicant['full_name'])[0]); ?>! Please complete the form below so we can feature you on our website.</p>
            </div>

            <?php if ($error): ?>
                <div class="form-message form-error" style="margin-bottom: 24px;">
                    <i class="fas fa-exclamation-circle"></i>
                    <div><?php echo $error; ?></div>
                </div>
            <?php endif; ?>

            <div class="associate-form-container">
                <form class="associate-form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

                    <div class="form-section-group">
                        <h3>Your Details</h3>

                        <div class="form-group">
                            <label for="display_name">Full Name and Qualifications <span class="required">*</span></label>
                            <input type="text" id="display_name" name="display_name" required
                                   placeholder="e.g. Jane Smith, CIPD Level 7, MCIPD"
                                   value="<?php echo htmlspecialchars($_POST['display_name'] ?? $applicant['full_name']); ?>">
                        </div>

                        <div class="form-group">
                            <label>HR Specialisms <span class="required">*</span> <span class="form-helper">(select up to 3)</span></label>
                            <div class="checkbox-grid">
                                <?php
                                $specialismOptions = [
                                    'Employee Relations',
                                    'Investigations',
                                    'Employment Law',
                                    'Settlements',
                                    'General Advisory',
                                    'HR Admin',
                                    'Talent',
                                    'HRIS',
                                    'L&D',
                                    'Reward'
                                ];
                                $selectedSpecialisms = $_POST['specialisms'] ?? [];
                                foreach ($specialismOptions as $spec):
                                ?>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="specialisms[]" value="<?php echo $spec; ?>"
                                           <?php echo in_array($spec, $selectedSpecialisms) ? 'checked' : ''; ?>>
                                    <span><?php echo $spec; ?></span>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="years_experience">Years of HR Experience <span class="required">*</span></label>
                            <input type="text" id="years_experience" name="years_experience" required
                                   placeholder="e.g. 15+ years"
                                   value="<?php echo htmlspecialchars($_POST['years_experience'] ?? ''); ?>">
                        </div>

                        <div class="form-group">
                            <label for="background">Professional Background <span class="required">*</span></label>
                            <textarea id="background" name="background" rows="2" required
                                      placeholder="One sentence - where you've worked and in what capacity"><?php echo htmlspecialchars($_POST['background'] ?? ''); ?></textarea>
                            <span class="form-helper">One sentence about where you've worked and in what capacity</span>
                        </div>

                        <div class="form-group">
                            <label for="enjoys">What Do You Enjoy Most About HR Work? <span class="required">*</span></label>
                            <textarea id="enjoys" name="enjoys" rows="2" required
                                      placeholder="One sentence"><?php echo htmlspecialchars($_POST['enjoys'] ?? ''); ?></textarea>
                            <span class="form-helper">One sentence</span>
                        </div>

                        <div class="form-group">
                            <label for="display_location">Location <span class="required">*</span></label>
                            <input type="text" id="display_location" name="display_location" required
                                   placeholder="e.g. Bristol, West Midlands, or Remote"
                                   value="<?php echo htmlspecialchars($_POST['display_location'] ?? $applicant['location']); ?>">
                            <span class="form-helper">Town or region for the website (Remote is fine)</span>
                        </div>
                    </div>

                    <div class="form-section-group">
                        <h3>Your Headshot</h3>

                        <div class="form-group">
                            <label for="headshot">Professional Headshot <span class="form-helper">(JPG, PNG or WebP, max 5MB)</span></label>
                            <input type="file" id="headshot" name="headshot" accept=".jpg,.jpeg,.png,.webp">
                            <span class="form-helper">Square format preferred, minimum 400x400px</span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-large">Submit Profile</button>
                </form>
            </div>
        <?php else: ?>
            <div class="error-message" style="text-align: center; padding: 60px 20px;">
                <div style="font-size: 64px; color: #EF4444; margin-bottom: 20px;"><i class="fas fa-exclamation-circle"></i></div>
                <h1 style="margin-bottom: 16px;">Missing Link</h1>
                <p style="font-size: 18px; color: #4A5568;">Please use the link from your email to access this form.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
// Limit checkbox selections to 3
document.querySelectorAll('input[name="specialisms[]"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        var checked = document.querySelectorAll('input[name="specialisms[]"]:checked');
        if (checked.length > 3) {
            this.checked = false;
            alert('Please select up to 3 specialisms only.');
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
