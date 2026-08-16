<?php
/**
 * Admin Dashboard
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';

requireAuth();

$pageTitle = 'Dashboard';

$applicantModel = new Applicant();
$statusCounts = $applicantModel->getStatusCounts();
$thisMonthCount = $applicantModel->getThisMonthCount();
$recentApplicants = $applicantModel->getRecent(10);

include 'includes/header.php';
?>

<!-- Stats Grid -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon pink">
            <i class="fas fa-users"></i>
        </div>
        <div class="stat-content">
            <h3><?php echo $statusCounts['total']; ?></h3>
            <p>Total Applicants</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon blue">
            <i class="fas fa-user-clock"></i>
        </div>
        <div class="stat-content">
            <h3><?php echo $statusCounts['new']; ?></h3>
            <p>New (Unreviewed)</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon green">
            <i class="fas fa-user-check"></i>
        </div>
        <div class="stat-content">
            <h3><?php echo $statusCounts['approved']; ?></h3>
            <p>Approved Associates</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon gold">
            <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="stat-content">
            <h3><?php echo $thisMonthCount; ?></h3>
            <p>This Month</p>
        </div>
    </div>
</div>

<!-- Quick Status Overview -->
<div class="card">
    <div class="card-header">
        <h2>Status Overview</h2>
    </div>
    <div class="card-body">
        <div class="stats-grid" style="margin-bottom: 0;">
            <div class="stat-card" style="background: var(--cream-light);">
                <div class="stat-content">
                    <h3><?php echo $statusCounts['reviewing']; ?></h3>
                    <p>Reviewing</p>
                </div>
            </div>
            <div class="stat-card" style="background: var(--cream-light);">
                <div class="stat-content">
                    <h3><?php echo $statusCounts['call_scheduled']; ?></h3>
                    <p>Call Scheduled</p>
                </div>
            </div>
            <div class="stat-card" style="background: var(--cream-light);">
                <div class="stat-content">
                    <h3><?php echo $statusCounts['not_suitable']; ?></h3>
                    <p>Not Suitable</p>
                </div>
            </div>
            <div class="stat-card" style="background: var(--cream-light);">
                <div class="stat-content">
                    <h3><?php echo $statusCounts['withdrawn']; ?></h3>
                    <p>Withdrawn</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Applications -->
<div class="card">
    <div class="card-header">
        <h2>Recent Applications</h2>
        <a href="add-applicant.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Applicant</a>
        <a href="applicants.php" class="btn btn-outline btn-sm">View All</a>
    </div>
    <div class="card-body" style="padding: 0;">
        <?php if (empty($recentApplicants)): ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <p>No applications yet</p>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Specialism</th>
                            <th>CIPD</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recentApplicants as $applicant): ?>
                            <tr>
                                <td>
                                    <a href="applicant.php?id=<?php echo $applicant['id']; ?>">
                                        <?php echo htmlspecialchars($applicant['full_name']); ?>
                                    </a>
                                </td>
                                <td><?php echo htmlspecialchars($applicant['location']); ?></td>
                                <td><?php echo Applicant::formatSpecialism($applicant['primary_specialism']); ?></td>
                                <td><?php echo Applicant::formatCipdLevel($applicant['cipd_level']); ?></td>
                                <td>£<?php echo number_format($applicant['hourly_rate'], 0); ?>/hr</td>
                                <td>
                                    <span class="badge <?php echo Applicant::getStatusClass($applicant['status']); ?>">
                                        <?php echo Applicant::formatStatus($applicant['status']); ?>
                                    </span>
                                </td>
                                <td><?php echo date('d M Y', strtotime($applicant['created_at'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
