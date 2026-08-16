<?php
/**
 * Individual Applicant Detail Page
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';
require_once dirname(__DIR__) . '/includes/Database.php';
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

$pageTitle = $applicant['full_name'];

// Handle form submissions
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST[CSRF_TOKEN_NAME] ?? '')) {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'update_status':
            $newStatus = $_POST['status'] ?? '';
            if ($newStatus && $applicantModel->updateStatus($id, $newStatus)) {
                $applicant = $applicantModel->getById($id);
                $message = 'Status updated successfully.';
                $messageType = 'success';
            }
            break;

        case 'update_details':
            $updateData = [
                'full_name' => trim($_POST['edit_full_name'] ?? ''),
                'email' => trim($_POST['edit_email'] ?? ''),
                'phone' => trim($_POST['edit_phone'] ?? ''),
                'location' => trim($_POST['edit_location'] ?? ''),
                'primary_specialism' => $_POST['edit_primary_specialism'] ?? $applicant['primary_specialism'],
                'cipd_level' => $_POST['edit_cipd_level'] ?? $applicant['cipd_level'],
                'years_experience' => $_POST['edit_years_experience'] ?? $applicant['years_experience'],
                'hourly_rate' => (float)($_POST['edit_hourly_rate'] ?? $applicant['hourly_rate']),
                'work_situation' => $_POST['edit_work_situation'] ?? $applicant['work_situation'],
                'has_pi_insurance' => $_POST['edit_has_pi_insurance'] ?? $applicant['has_pi_insurance'],
                'vat_registered' => isset($_POST['edit_vat_registered']) ? (int)$_POST['edit_vat_registered'] : 0,
                'linkedin_url' => trim($_POST['edit_linkedin_url'] ?? '') ?: null,
                'experience_summary' => trim($_POST['edit_experience_summary'] ?? ''),
            ];
            // Validate required fields
            if (empty($updateData['full_name']) || empty($updateData['email'])) {
                $message = 'Name and email are required.';
                $messageType = 'error';
            } else {
                $db = Database::getInstance();
                $db->update('applicants', $updateData, 'id = ?', [$id]);
                $applicant = $applicantModel->getById($id);
                $applicantModel->logActivity($id, 'details_updated', []);
                $message = 'Details updated successfully.';
                $messageType = 'success';
                $pageTitle = $applicant['full_name'];
            }
            break;

        case 'update_notes':
            $notes = $_POST['notes'] ?? '';
            if ($applicantModel->updateNotes($id, $notes)) {
                $applicant = $applicantModel->getById($id);
                $message = 'Notes updated successfully.';
                $messageType = 'success';
            }
            break;

        case 'send_acknowledgement':
            if (!$emailService->hasBeenSent($id, 'acknowledgement')) {
                $result = $emailService->sendAcknowledgement($applicant);
                if ($result['success']) {
                    $message = 'Acknowledgement email sent successfully.';
                    $messageType = 'success';
                } else {
                    $message = 'Failed to send email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Acknowledgement email has already been sent.';
                $messageType = 'warning';
            }
            break;

        case 'send_call_invite':
            $callDate = !empty($_POST['call_date']) ? $_POST['call_date'] : null;
            if ($callDate) {
                $applicantModel->scheduleCall($id, $callDate);
            }
            $result = $emailService->sendCallInvite($applicant, $callDate);
            if ($result['success']) {
                $applicant = $applicantModel->getById($id);
                $message = 'Call invite email sent successfully.';
                $messageType = 'success';
            } else {
                $message = 'Failed to send email. Please try again.';
                $messageType = 'error';
            }
            break;

        case 'send_approved':
            // Generate agreement token and send combined welcome + agreement email
            $token = $applicantModel->generateAgreementToken($id);

            // DEBUG: Check if token was saved
            $checkApplicant = $applicantModel->getById($id);
            error_log("DEBUG send_approved: Generated token={$token}, Saved token=" . ($checkApplicant['agreement_token'] ?? 'NULL'));

            if ($token) {
                $applicant = $applicantModel->getById($id);
                $result = $emailService->sendApproved($applicant, $token);
                if ($result['success']) {
                    $message = 'Welcome email with agreement link sent successfully. Token: ' . substr($token, 0, 20) . '...';
                    $messageType = 'success';
                } else {
                    $message = 'Failed to send email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Failed to generate agreement token. Please try again.';
                $messageType = 'error';
            }
            $applicant = $applicantModel->getById($id);
            break;

        case 'send_not_suitable':
            $reason = $_POST['rejection_reason'] ?? '';
            $applicantModel->updateStatus($id, 'not_suitable');
            $applicant = $applicantModel->getById($id);
            $result = $emailService->sendNotSuitable($applicant, $reason);
            if ($result['success']) {
                $message = 'Rejection email sent and status updated.';
                $messageType = 'success';
            } else {
                $message = 'Status updated but email failed to send.';
                $messageType = 'warning';
            }
            break;

        case 'mark_withdrawn':
            $applicantModel->updateStatus($id, 'withdrawn');
            $applicant = $applicantModel->getById($id);
            $result = $emailService->sendWithdrawn($applicant);
            $message = 'Applicant marked as withdrawn.';
            $messageType = 'success';
            break;

        case 'delete':
            if ($applicantModel->delete($id)) {
                $_SESSION['flash_message'] = 'Applicant deleted successfully.';
                $_SESSION['flash_type'] = 'success';
                header('Location: applicants.php');
                exit;
            } else {
                $message = 'Failed to delete applicant.';
                $messageType = 'error';
            }
            break;

        case 'send_agreement':
            // Generate agreement token and send link
            $token = $applicantModel->generateAgreementToken($id);
            if ($token) {
                $result = $emailService->sendAgreementLink($applicant, $token);
                if ($result['success']) {
                    $applicantModel->updateStatus($id, 'agreement_sent');
                    $applicant = $applicantModel->getById($id);
                    $message = 'Agreement link sent successfully.';
                    $messageType = 'success';
                } else {
                    $message = 'Failed to send agreement email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Failed to generate agreement token. Please try again.';
                $messageType = 'error';
            }
            break;

        case 'resend_agreement':
            // Generate new token and resend
            $token = $applicantModel->generateAgreementToken($id);
            if ($token) {
                $result = $emailService->sendAgreementLink($applicant, $token);
                if ($result['success']) {
                    $applicant = $applicantModel->getById($id);
                    $message = 'Agreement link resent with new expiry date.';
                    $messageType = 'success';
                } else {
                    $message = 'Failed to send agreement email. Please try again.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Failed to generate agreement token. Please try again.';
                $messageType = 'error';
            }
            break;

        case 'send_profile_request':
            // Generate profile token and send link
            $profileToken = bin2hex(random_bytes(32));
            $db = Database::getInstance();
            $db->update('applicants', ['profile_token' => $profileToken], 'id = ?', [$id]);

            $result = $emailService->sendProfileRequest($applicant, $profileToken);
            if ($result['success']) {
                $message = 'Profile request email sent successfully.';
                $messageType = 'success';
            } else {
                $message = 'Failed to send profile request email. Please try again.';
                $messageType = 'error';
            }
            break;
    }
}

// Get activity and email logs
$activityLog = $applicantModel->getActivityLog($id);
$emailLog = $emailService->getEmailLog($id);

// Parse secondary specialisms
$secondarySpecialisms = json_decode($applicant['secondary_specialisms'] ?? '[]', true) ?: [];

include 'includes/header.php';
?>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $messageType; ?>">
        <i class="fas fa-<?php echo $messageType === 'success' ? 'check-circle' : ($messageType === 'error' ? 'exclamation-circle' : 'info-circle'); ?>"></i>
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<!-- Applicant Header -->
<div class="applicant-header">
    <div class="applicant-title">
        <a href="applicants.php" class="btn btn-outline btn-sm">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1><?php echo htmlspecialchars($applicant['full_name']); ?></h1>
        <span class="badge <?php echo Applicant::getStatusClass($applicant['status']); ?>">
            <?php echo Applicant::formatStatus($applicant['status']); ?>
        </span>
    </div>
    <div class="applicant-actions">
        <?php if ($applicant['cv_path'] && file_exists($applicant['cv_path'])): ?>
            <a href="download-cv.php?id=<?php echo $id; ?>" class="btn btn-outline btn-sm">
                <i class="fas fa-download"></i> Download CV
            </a>
        <?php endif; ?>
        <button type="button" class="btn btn-outline btn-sm" onclick="openModal('editModal')">
            <i class="fas fa-pen"></i> Edit Details
        </button>
        <button type="button" class="btn btn-primary btn-sm" onclick="openModal('statusModal')">
            <i class="fas fa-edit"></i> Change Status
        </button>
        <button type="button" class="btn btn-secondary btn-sm" onclick="openModal('emailModal')">
            <i class="fas fa-envelope"></i> Send Email
        </button>
        <button type="button" class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">
            <i class="fas fa-trash"></i> Delete
        </button>
    </div>
</div>

<!-- Detail Grid -->
<div class="detail-grid">
    <!-- Left Column -->
    <div>
        <!-- Contact Details -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-user"></i> Contact Details</h3>
            </div>
            <div class="detail-section-body">
                <div class="detail-item">
                    <div class="detail-label">Email</div>
                    <div class="detail-value">
                        <a href="mailto:<?php echo htmlspecialchars($applicant['email']); ?>">
                            <?php echo htmlspecialchars($applicant['email']); ?>
                        </a>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Phone</div>
                    <div class="detail-value">
                        <a href="tel:<?php echo htmlspecialchars($applicant['phone']); ?>">
                            <?php echo htmlspecialchars($applicant['phone']); ?>
                        </a>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Location</div>
                    <div class="detail-value"><?php echo htmlspecialchars($applicant['location']); ?></div>
                </div>
                <?php if ($applicant['linkedin_url']): ?>
                    <div class="detail-item">
                        <div class="detail-label">LinkedIn</div>
                        <div class="detail-value">
                            <a href="<?php echo htmlspecialchars($applicant['linkedin_url']); ?>" target="_blank">
                                View Profile <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($applicant['website_url']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Website</div>
                        <div class="detail-value">
                            <a href="<?php echo htmlspecialchars($applicant['website_url']); ?>" target="_blank">
                                Visit Website <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Professional Background -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-briefcase"></i> Professional Background</h3>
            </div>
            <div class="detail-section-body">
                <div class="detail-item">
                    <div class="detail-label">CIPD Level</div>
                    <div class="detail-value"><?php echo Applicant::formatCipdLevel($applicant['cipd_level']); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Years of Experience</div>
                    <div class="detail-value"><?php echo htmlspecialchars($applicant['years_experience']); ?> years</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Current Work Situation</div>
                    <div class="detail-value"><?php echo ucwords(str_replace('_', ' ', $applicant['work_situation'])); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Hourly Rate Expectation</div>
                    <div class="detail-value">£<?php echo number_format($applicant['hourly_rate'], 2); ?>/hour</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Professional Indemnity Insurance</div>
                    <div class="detail-value"><?php echo ucfirst(str_replace('_', ' ', $applicant['has_pi_insurance'])); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">VAT Registered</div>
                    <div class="detail-value"><?php echo !empty($applicant['vat_registered']) ? 'Yes' : 'No'; ?></div>
                </div>
            </div>
        </div>

        <!-- Specialisms -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-star"></i> Specialisms</h3>
            </div>
            <div class="detail-section-body">
                <div class="detail-item">
                    <div class="detail-label">Primary Specialism</div>
                    <div class="detail-value">
                        <strong><?php echo Applicant::formatSpecialism($applicant['primary_specialism']); ?></strong>
                    </div>
                </div>
                <?php if (!empty($secondarySpecialisms)): ?>
                    <div class="detail-item">
                        <div class="detail-label">Secondary Specialisms</div>
                        <div class="detail-value">
                            <?php foreach ($secondarySpecialisms as $spec): ?>
                                <span class="badge" style="margin-right: 0.25rem; margin-bottom: 0.25rem; background: var(--cream-dark); color: var(--text-color);">
                                    <?php echo Applicant::formatSpecialism($spec); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Experience Summary -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-file-alt"></i> Experience Summary</h3>
            </div>
            <div class="detail-section-body">
                <p style="white-space: pre-wrap; margin: 0;"><?php echo htmlspecialchars($applicant['experience_summary']); ?></p>
            </div>
        </div>

        <!-- Website Profile -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-globe"></i> Website Profile</h3>
                <?php if (!empty($applicant['profile_submitted_at'])): ?>
                    <span class="badge" style="background: #10B981; color: white;">Submitted <?php echo date('j M Y', strtotime($applicant['profile_submitted_at'])); ?></span>
                <?php else: ?>
                    <span class="badge" style="background: #F59E0B; color: white;">Not Submitted</span>
                <?php endif; ?>
            </div>
            <div class="detail-section-body">
                <?php if (!empty($applicant['profile_submitted_at'])): ?>
                    <div class="detail-item">
                        <div class="detail-label">Display Name</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_display_name'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Specialisms</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_specialisms'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Years Experience</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_years_experience'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Background</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_background'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Enjoys</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_enjoys'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Location</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['profile_location'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Headshot</div>
                        <div class="detail-value">
                            <?php if (!empty($applicant['profile_headshot']) && file_exists($applicant['profile_headshot'])): ?>
                                <a href="download-headshot.php?id=<?php echo $id; ?>" class="btn btn-outline btn-sm">
                                    <i class="fas fa-download"></i> Download Headshot
                                </a>
                            <?php else: ?>
                                <span style="color: #718096;">Not uploaded</span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <p style="color: #718096; margin: 0;">Profile not yet submitted by associate.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div>
        <!-- Admin Notes -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-sticky-note"></i> Admin Notes</h3>
            </div>
            <div class="detail-section-body">
                <form method="POST" action="">
                    <?php csrfField(); ?>
                    <input type="hidden" name="action" value="update_notes">
                    <div class="form-group">
                        <textarea name="notes" class="form-control" rows="4" placeholder="Add notes about this applicant..."><?php echo htmlspecialchars($applicant['notes'] ?? ''); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-save"></i> Save Notes
                    </button>
                </form>
            </div>
        </div>

        <!-- Email Log -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-envelope"></i> Email History</h3>
            </div>
            <div class="detail-section-body">
                <?php if (empty($emailLog)): ?>
                    <p style="color: var(--text-secondary); margin: 0;">No emails sent yet.</p>
                <?php else: ?>
                    <div class="activity-timeline">
                        <?php foreach ($emailLog as $email): ?>
                            <div class="activity-item">
                                <div class="activity-action">
                                    <?php echo htmlspecialchars($email['subject']); ?>
                                    <?php if ($email['status'] === 'failed'): ?>
                                        <span class="badge badge-rejected">Failed</span>
                                    <?php endif; ?>
                                </div>
                                <div class="activity-time">
                                    <?php echo date('d M Y, H:i', strtotime($email['sent_at'])); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Activity Log -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-history"></i> Activity Log</h3>
            </div>
            <div class="detail-section-body">
                <?php if (empty($activityLog)): ?>
                    <p style="color: var(--text-secondary); margin: 0;">No activity recorded.</p>
                <?php else: ?>
                    <div class="activity-timeline">
                        <?php foreach ($activityLog as $activity): ?>
                            <div class="activity-item">
                                <div class="activity-action">
                                    <?php
                                    $details = json_decode($activity['details'], true) ?: [];
                                    switch ($activity['action']) {
                                        case 'application_submitted':
                                            echo 'Application submitted';
                                            break;
                                        case 'status_changed':
                                            echo 'Status changed from ' . Applicant::formatStatus($details['old_status'] ?? 'unknown') . ' to ' . Applicant::formatStatus($details['new_status'] ?? 'unknown');
                                            break;
                                        case 'note_updated':
                                            echo 'Notes updated';
                                            break;
                                        case 'call_scheduled':
                                            echo 'Call scheduled for ' . date('d M Y, H:i', strtotime($details['call_date'] ?? ''));
                                            break;
                                        case 'agreement_sent':
                                            echo 'Agreement link sent';
                                            break;
                                        case 'agreement_signed':
                                            echo 'Agreement signed electronically';
                                            break;
                                        default:
                                            echo ucwords(str_replace('_', ' ', $activity['action']));
                                    }
                                    ?>
                                </div>
                                <div class="activity-time">
                                    <?php echo date('d M Y, H:i', strtotime($activity['created_at'])); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Meta Info -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-info-circle"></i> Application Info</h3>
            </div>
            <div class="detail-section-body">
                <div class="detail-item">
                    <div class="detail-label">Applied On</div>
                    <div class="detail-value"><?php echo date('d M Y, H:i', strtotime($applicant['created_at'])); ?></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Last Updated</div>
                    <div class="detail-value"><?php echo date('d M Y, H:i', strtotime($applicant['updated_at'])); ?></div>
                </div>
                <?php if ($applicant['referral_source']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Referral Source</div>
                        <div class="detail-value"><?php echo ucfirst($applicant['referral_source']); ?></div>
                    </div>
                <?php endif; ?>
                <?php if ($applicant['call_scheduled_date']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Call Scheduled</div>
                        <div class="detail-value"><?php echo date('d M Y, H:i', strtotime($applicant['call_scheduled_date'])); ?></div>
                    </div>
                <?php endif; ?>
                <?php if ($applicant['approved_date']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Approved On</div>
                        <div class="detail-value"><?php echo date('d M Y', strtotime($applicant['approved_date'])); ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (in_array($applicant['status'], ['agreement_sent', 'agreement_signed'])): ?>
        <!-- Agreement Info -->
        <div class="detail-section">
            <div class="detail-section-header">
                <h3><i class="fas fa-file-signature"></i> Agreement</h3>
            </div>
            <div class="detail-section-body">
                <?php if ($applicant['agreement_sent_at']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Agreement Sent</div>
                        <div class="detail-value"><?php echo date('d M Y, H:i', strtotime($applicant['agreement_sent_at'])); ?></div>
                    </div>
                <?php endif; ?>

                <?php if ($applicant['status'] === 'agreement_sent' && $applicant['agreement_token_expires']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Link Expires</div>
                        <div class="detail-value">
                            <?php
                            $expires = new DateTime($applicant['agreement_token_expires']);
                            $now = new DateTime();
                            if ($expires > $now) {
                                echo date('d M Y, H:i', strtotime($applicant['agreement_token_expires']));
                            } else {
                                echo '<span style="color: var(--error);">Expired</span>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($applicant['agreement_signed_at']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Signed On</div>
                        <div class="detail-value"><?php echo date('d M Y, H:i', strtotime($applicant['agreement_signed_at'])); ?></div>
                    </div>
                <?php endif; ?>

                <?php if ($applicant['agreement_ip_address']): ?>
                    <div class="detail-item">
                        <div class="detail-label">Signed From IP</div>
                        <div class="detail-value"><?php echo htmlspecialchars($applicant['agreement_ip_address']); ?></div>
                    </div>
                <?php endif; ?>

                <?php
                // Get agreement fields if signed
                if ($applicant['status'] === 'agreement_signed'):
                    $agreementFields = $applicantModel->getAgreementFields($id);
                    if ($agreementFields):
                ?>
                    <div class="detail-item">
                        <div class="detail-label">Business Name</div>
                        <div class="detail-value"><?php echo htmlspecialchars($agreementFields['business_name'] ?? ''); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Business Address</div>
                        <div class="detail-value"><?php echo nl2br(htmlspecialchars($agreementFields['business_address'] ?? '')); ?></div>
                    </div>
                    <?php if (!empty($agreementFields['company_number']) && $agreementFields['company_number'] !== 'N/A'): ?>
                        <div class="detail-item">
                            <div class="detail-label">Company Number</div>
                            <div class="detail-value"><?php echo htmlspecialchars($agreementFields['company_number']); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($agreementFields['vat_number']) && $agreementFields['vat_number'] !== 'N/A'): ?>
                        <div class="detail-item">
                            <div class="detail-label">VAT Number</div>
                            <div class="detail-value"><?php echo htmlspecialchars($agreementFields['vat_number']); ?></div>
                        </div>
                    <?php endif; ?>
                <?php
                    endif;
                endif;
                ?>

                <?php if ($applicant['agreement_pdf_path'] && file_exists($applicant['agreement_pdf_path'])): ?>
                    <div style="margin-top: 1rem;">
                        <a href="download-agreement.php?id=<?php echo $id; ?>" class="btn btn-primary btn-sm btn-block">
                            <i class="fas fa-file-pdf"></i> Download Signed Agreement
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Status Change Modal -->
<div id="statusModal" class="modal-overlay">
    <div class="modal">
        <div class="modal-header">
            <h3>Change Status</h3>
            <button type="button" class="modal-close" onclick="closeModal('statusModal')">&times;</button>
        </div>
        <form method="POST" action="">
            <?php csrfField(); ?>
            <input type="hidden" name="action" value="update_status">
            <div class="modal-body">
                <div class="form-group">
                    <label>New Status</label>
                    <select name="status" class="form-control" required>
                        <option value="new" <?php echo $applicant['status'] === 'new' ? 'selected' : ''; ?>>New</option>
                        <option value="reviewing" <?php echo $applicant['status'] === 'reviewing' ? 'selected' : ''; ?>>Reviewing</option>
                        <option value="call_scheduled" <?php echo $applicant['status'] === 'call_scheduled' ? 'selected' : ''; ?>>Call Scheduled</option>
                        <option value="approved" <?php echo $applicant['status'] === 'approved' ? 'selected' : ''; ?>>Approved</option>
                        <option value="agreement_sent" <?php echo $applicant['status'] === 'agreement_sent' ? 'selected' : ''; ?>>Agreement Sent</option>
                        <option value="agreement_signed" <?php echo $applicant['status'] === 'agreement_signed' ? 'selected' : ''; ?>>Agreement Signed</option>
                        <option value="not_suitable" <?php echo $applicant['status'] === 'not_suitable' ? 'selected' : ''; ?>>Not Suitable</option>
                        <option value="withdrawn" <?php echo $applicant['status'] === 'withdrawn' ? 'selected' : ''; ?>>Withdrawn</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" onclick="closeModal('statusModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Status</button>
            </div>
        </form>
    </div>
</div>

<!-- Email Modal -->
<div id="emailModal" class="modal-overlay">
    <div class="modal">
        <div class="modal-header">
            <h3>Send Email</h3>
            <button type="button" class="modal-close" onclick="closeModal('emailModal')">&times;</button>
        </div>
        <div class="modal-body">
            <p style="margin-bottom: 1rem;">Select an email action:</p>

            <?php if (!$emailService->hasBeenSent($id, 'acknowledgement')): ?>
                <form method="POST" action="" style="margin-bottom: 1rem;">
                    <?php csrfField(); ?>
                    <input type="hidden" name="action" value="send_acknowledgement">
                    <button type="submit" class="btn btn-outline btn-block">
                        <i class="fas fa-envelope"></i> Send Acknowledgement Email
                    </button>
                </form>
            <?php endif; ?>

            <form method="POST" action="" style="margin-bottom: 1rem;">
                <?php csrfField(); ?>
                <input type="hidden" name="action" value="send_call_invite">
                <button type="submit" class="btn btn-outline btn-block">
                    <i class="fas fa-phone"></i> Send Call Invite Email
                </button>
                <small style="display: block; margin-top: 0.5rem; color: var(--text-secondary);">Includes Cal.com booking link</small>
            </form>

            <a href="edit-agreement.php?id=<?php echo $id; ?>" class="btn btn-success btn-block" style="margin-bottom: 1rem; display: block; text-align: center;">
                <i class="fas fa-check"></i> Approve & Edit Agreement
            </a>
            <small style="display: block; margin-top: -0.5rem; margin-bottom: 1rem; color: var(--text-secondary);">
                Review/edit terms before sending agreement link
            </small>

            <?php if ($applicant['status'] === 'agreement_sent'): ?>
                <a href="edit-agreement.php?id=<?php echo $id; ?>" class="btn btn-outline btn-block" style="margin-bottom: 1rem; display: block; text-align: center;">
                    <i class="fas fa-edit"></i> Edit & Resend Agreement
                </a>
                <?php if ($applicant['agreement_token_expires']): ?>
                    <small style="display: block; margin-top: -0.5rem; margin-bottom: 1rem; color: var(--text-secondary);">
                        <?php
                        $expires = new DateTime($applicant['agreement_token_expires']);
                        $now = new DateTime();
                        if ($expires > $now) {
                            $diff = $now->diff($expires);
                            echo 'Current link expires in ' . $diff->days . ' day' . ($diff->days !== 1 ? 's' : '');
                        } else {
                            echo '<span style="color: var(--error);">Link has expired</span>';
                        }
                        ?>
                    </small>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($applicant['status'] === 'agreement_signed' && $applicant['agreement_pdf_path']): ?>
                <a href="download-agreement.php?id=<?php echo $id; ?>" class="btn btn-success btn-block" style="margin-bottom: 1rem;">
                    <i class="fas fa-file-pdf"></i> Download Signed Agreement
                </a>
            <?php endif; ?>

            <?php if ($applicant['status'] === 'agreement_signed'): ?>
                <form method="POST" action="" style="margin-bottom: 1rem;">
                    <?php csrfField(); ?>
                    <input type="hidden" name="action" value="send_profile_request">
                    <button type="submit" class="btn btn-outline btn-block">
                        <i class="fas fa-user-circle"></i> Send Profile Request
                    </button>
                    <small style="display: block; margin-top: 0.5rem; color: var(--text-secondary);">
                        Asks for headshot and website profile info
                        <?php if (!empty($applicant['profile_submitted_at'])): ?>
                            <br><span style="color: var(--success);">Profile submitted: <?php echo date('j M Y', strtotime($applicant['profile_submitted_at'])); ?></span>
                        <?php endif; ?>
                    </small>
                </form>
            <?php endif; ?>

            <form method="POST" action="" style="margin-bottom: 1rem;">
                <?php csrfField(); ?>
                <input type="hidden" name="action" value="send_not_suitable">
                <div class="form-group">
                    <label>Rejection Reason (optional)</label>
                    <textarea name="rejection_reason" class="form-control" rows="2" placeholder="The work we typically handle requires..."></textarea>
                </div>
                <button type="submit" class="btn btn-danger btn-block">
                    <i class="fas fa-times"></i> Reject & Send Email
                </button>
            </form>

            <form method="POST" action="">
                <?php csrfField(); ?>
                <input type="hidden" name="action" value="mark_withdrawn">
                <button type="submit" class="btn btn-outline btn-block">
                    <i class="fas fa-user-slash"></i> Mark as Withdrawn
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="modal-overlay">
    <div class="modal">
        <div class="modal-header">
            <h3>Delete Applicant</h3>
            <button type="button" class="modal-close" onclick="closeModal('deleteModal')">&times;</button>
        </div>
        <form method="POST" action="">
            <?php csrfField(); ?>
            <input type="hidden" name="action" value="delete">
            <div class="modal-body">
                <p style="margin-bottom: 1rem;"><strong>Are you sure you want to delete this applicant?</strong></p>
                <p style="color: var(--text-secondary);">This will permanently delete:</p>
                <ul style="color: var(--text-secondary); margin: 0.5rem 0 1rem 1.5rem;">
                    <li><?php echo htmlspecialchars($applicant['full_name']); ?>'s application</li>
                    <li>All activity logs and email history</li>
                    <li>Uploaded CV (if any)</li>
                    <li>Signed agreement (if any)</li>
                </ul>
                <p style="color: var(--error);"><i class="fas fa-exclamation-triangle"></i> This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" onclick="closeModal('deleteModal')">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete Permanently</button>
            </div>
        </form>
    </div>
</div>


<!-- Edit Details Modal -->
<div id="editModal" class="modal-overlay">
    <div class="modal" style="max-width: 650px;">
        <div class="modal-header">
            <h3>Edit Applicant Details</h3>
            <button type="button" class="modal-close" onclick="closeModal('editModal')">&times;</button>
        </div>
        <form method="POST" action="">
            <?php csrfField(); ?>
            <input type="hidden" name="action" value="update_details">
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="edit_full_name" class="form-control" required
                           value="<?php echo htmlspecialchars($applicant['full_name']); ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" class="form-control" required
                           value="<?php echo htmlspecialchars($applicant['email']); ?>">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="edit_phone" class="form-control"
                               value="<?php echo htmlspecialchars($applicant['phone']); ?>">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="edit_location" class="form-control"
                               value="<?php echo htmlspecialchars($applicant['location']); ?>">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Primary Specialism</label>
                        <select name="edit_primary_specialism" class="form-control">
                            <?php
                            $specs = [
                                'general_hr_advisory' => 'General HR Advisory',
                                'employee_relations' => 'Employee Relations',
                                'workplace_investigations' => 'Workplace Investigations',
                                'employment_law' => 'Employment Law',
                                'settlement_agreements' => 'Settlement Agreements',
                                'hr_administration' => 'HR Administration',
                                'talent_recruitment' => 'Talent &amp; Recruitment',
                                'hris_systems' => 'HRIS &amp; Systems',
                                'learning_development' => 'Learning &amp; Development',
                                'reward_benefits' => 'Reward &amp; Benefits',
                                'other' => 'Other',
                            ];
                            foreach ($specs as $val => $label) {
                                $sel = $applicant['primary_specialism'] === $val ? ' selected' : '';
                                echo "<option value=\"{$val}\"{$sel}>{$label}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>CIPD Level</label>
                        <select name="edit_cipd_level" class="form-control">
                            <?php
                            $levels = [
                                'none' => 'Not CIPD qualified',
                                'level_3' => 'Level 3',
                                'level_5' => 'Level 5',
                                'level_7' => 'Level 7',
                                'other' => 'Other qualification',
                            ];
                            foreach ($levels as $val => $label) {
                                $sel = $applicant['cipd_level'] === $val ? ' selected' : '';
                                echo "<option value=\"{$val}\"{$sel}>{$label}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Years Experience</label>
                        <input type="text" name="edit_years_experience" class="form-control"
                               value="<?php echo htmlspecialchars($applicant['years_experience']); ?>">
                    </div>
                    <div class="form-group">
                        <label>Hourly Rate (&pound;)</label>
                        <input type="number" name="edit_hourly_rate" class="form-control" step="0.01" min="0"
                               value="<?php echo htmlspecialchars($applicant['hourly_rate']); ?>">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>Work Situation</label>
                        <select name="edit_work_situation" class="form-control">
                            <option value="">-- Select --</option>
                            <?php
                            $situations = [
                                'freelance_consultant' => 'Freelance Consultant',
                                'employed_looking' => 'Employed, looking to move',
                                'between_roles' => 'Between roles',
                                'portfolio_career' => 'Portfolio career',
                                'other' => 'Other',
                            ];
                            foreach ($situations as $val => $label) {
                                $sel = $applicant['work_situation'] === $val ? ' selected' : '';
                                echo "<option value=\"{$val}\"{$sel}>{$label}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>PI Insurance</label>
                        <select name="edit_has_pi_insurance" class="form-control">
                            <?php
                            $piOptions = ['no' => 'No', 'yes' => 'Yes', 'willing' => 'Willing to get'];
                            foreach ($piOptions as $val => $label) {
                                $sel = $applicant['has_pi_insurance'] === $val ? ' selected' : '';
                                echo "<option value=\"{$val}\"{$sel}>{$label}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label>VAT Registered</label>
                        <select name="edit_vat_registered" class="form-control">
                            <option value="0"<?php echo empty($applicant['vat_registered']) ? ' selected' : ''; ?>>No</option>
                            <option value="1"<?php echo !empty($applicant['vat_registered']) ? ' selected' : ''; ?>>Yes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>LinkedIn URL</label>
                        <input type="url" name="edit_linkedin_url" class="form-control"
                               value="<?php echo htmlspecialchars($applicant['linkedin_url'] ?? ''); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>Experience Summary</label>
                    <textarea name="edit_experience_summary" class="form-control" rows="4"><?php echo htmlspecialchars($applicant['experience_summary']); ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" onclick="closeModal('editModal')">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<script>
function openModal(id) {
    document.getElementById(id).classList.add('active');
}

function closeModal(id) {
    document.getElementById(id).classList.remove('active');
}

// Close modal on escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal-overlay.active').forEach(modal => {
            modal.classList.remove('active');
        });
    }
});

// Close modal on overlay click
document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            overlay.classList.remove('active');
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
