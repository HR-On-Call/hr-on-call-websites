<?php
/**
 * Test Email Script - Sends all email templates for review
 * DELETE THIS FILE AFTER USE
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Email.php';

requireAuth();

$emailService = new Email();

// Test applicant data
$testApplicant = [
    'id' => 0,
    'full_name' => 'Grace Pariser',
    'email' => 'grace@on-call.co.uk'
];

$results = [];

// Send acknowledgement
$template = $emailService->getTemplate('acknowledgement');
$firstName = explode(' ', $testApplicant['full_name'])[0];
$parsed = $emailService->parseTemplate($template, [
    'first_name' => $firstName,
    'full_name' => $testApplicant['full_name']
]);
$result = $emailService->send(
    $testApplicant['email'],
    $testApplicant['full_name'],
    '[TEST] ' . $parsed['subject'],
    $parsed['body']
);
$results['acknowledgement'] = $result['success'] ? 'Sent' : 'Failed';

// Send call invite (with booking button)
$template = $emailService->getTemplate('call_invite');
$bookingButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 8px 0 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="https://cal.com/hr-on-call/associate-network" target="_blank" style="display: inline-block; padding: 12px 24px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Book a Call</a></td></tr></table>';
$parsed = $emailService->parseTemplate($template, [
    'first_name' => $firstName,
    'full_name' => $testApplicant['full_name'],
    'booking_button' => $bookingButton
]);
$result = $emailService->send(
    $testApplicant['email'],
    $testApplicant['full_name'],
    '[TEST] ' . $parsed['subject'],
    $parsed['body']
);
$results['call_invite'] = $result['success'] ? 'Sent' : 'Failed';

// Send approved
$template = $emailService->getTemplate('approved');
$parsed = $emailService->parseTemplate($template, [
    'first_name' => $firstName,
    'full_name' => $testApplicant['full_name']
]);
$result = $emailService->send(
    $testApplicant['email'],
    $testApplicant['full_name'],
    '[TEST] ' . $parsed['subject'],
    $parsed['body']
);
$results['approved'] = $result['success'] ? 'Sent' : 'Failed';

// Send not suitable
$template = $emailService->getTemplate('not_suitable');
$parsed = $emailService->parseTemplate($template, [
    'first_name' => $firstName,
    'full_name' => $testApplicant['full_name'],
    'rejection_reason' => 'the work we typically handle requires specific experience in employee relations and workplace investigations.'
]);
$result = $emailService->send(
    $testApplicant['email'],
    $testApplicant['full_name'],
    '[TEST] ' . $parsed['subject'],
    $parsed['body']
);
$results['not_suitable'] = $result['success'] ? 'Sent' : 'Failed';

// Send withdrawn
$template = $emailService->getTemplate('withdrawn');
$parsed = $emailService->parseTemplate($template, [
    'first_name' => $firstName,
    'full_name' => $testApplicant['full_name']
]);
$result = $emailService->send(
    $testApplicant['email'],
    $testApplicant['full_name'],
    '[TEST] ' . $parsed['subject'],
    $parsed['body']
);
$results['withdrawn'] = $result['success'] ? 'Sent' : 'Failed';

// Display results
include 'includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2>Test Emails Sent</h2>
    </div>
    <div class="card-body">
        <p>All test emails have been sent to <strong>grace@on-call.co.uk</strong></p>
        <p>Subject lines are prefixed with [TEST] for easy identification.</p>

        <table class="table" style="margin-top: 1.5rem;">
            <thead>
                <tr>
                    <th>Template</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $template => $status): ?>
                <tr>
                    <td><?php echo ucwords(str_replace('_', ' ', $template)); ?></td>
                    <td>
                        <?php if ($status === 'Sent'): ?>
                            <span class="badge badge-success"><i class="fas fa-check"></i> <?php echo $status; ?></span>
                        <?php else: ?>
                            <span class="badge badge-danger"><i class="fas fa-times"></i> <?php echo $status; ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div style="margin-top: 2rem; padding: 1rem; background: #FEF3C7; border-radius: 6px; border-left: 4px solid #F59E0B;">
            <strong><i class="fas fa-exclamation-triangle"></i> Remember:</strong> Delete this file after reviewing the emails.
        </div>

        <a href="index.php" class="btn btn-primary" style="margin-top: 1.5rem;">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
