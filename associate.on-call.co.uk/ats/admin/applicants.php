<?php
/**
 * Applicants List Page
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';

requireAuth();

$pageTitle = 'Applicants';

$applicantModel = new Applicant();

// Get filter values
$filters = [
    'status' => $_GET['status'] ?? '',
    'primary_specialism' => $_GET['specialism'] ?? '',
    'cipd_level' => $_GET['cipd'] ?? '',
    'search' => $_GET['search'] ?? '',
    'hourly_rate_min' => $_GET['rate_min'] ?? '',
    'hourly_rate_max' => $_GET['rate_max'] ?? ''
];

// Pagination
$page = max(1, intval($_GET['page'] ?? 1));
$perPage = 20;
$offset = ($page - 1) * $perPage;

// Get applicants
$applicants = $applicantModel->getAll($filters, 'created_at DESC', $perPage, $offset);
$totalCount = $applicantModel->count($filters);
$totalPages = ceil($totalCount / $perPage);

// Get filter options
$specialisms = $applicantModel->getUniqueSpecialisms();
$cipdLevels = $applicantModel->getUniqueCipdLevels();

include 'includes/header.php';

// Handle flash messages
$flashMessage = $_SESSION['flash_message'] ?? null;
$flashType = $_SESSION['flash_type'] ?? 'info';
unset($_SESSION['flash_message'], $_SESSION['flash_type']);
?>

<?php if ($flashMessage): ?>
    <div class="alert alert-<?php echo $flashType; ?>">
        <i class="fas fa-<?php echo $flashType === 'success' ? 'check-circle' : 'info-circle'; ?>"></i>
        <?php echo htmlspecialchars($flashMessage); ?>
    </div>
<?php endif; ?>

<!-- Filters -->
<div class="card">
    <div class="card-body">
        <form method="GET" action="">
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Search</label>
                    <input type="text" name="search" class="form-control" placeholder="Name or email..." value="<?php echo htmlspecialchars($filters['search']); ?>">
                </div>

                <div class="filter-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">All Statuses</option>
                        <option value="new" <?php echo $filters['status'] === 'new' ? 'selected' : ''; ?>>New</option>
                        <option value="reviewing" <?php echo $filters['status'] === 'reviewing' ? 'selected' : ''; ?>>Reviewing</option>
                        <option value="call_scheduled" <?php echo $filters['status'] === 'call_scheduled' ? 'selected' : ''; ?>>Call Scheduled</option>
                        <option value="approved" <?php echo $filters['status'] === 'approved' ? 'selected' : ''; ?>>Approved</option>
                        <option value="agreement_sent" <?php echo $filters['status'] === 'agreement_sent' ? 'selected' : ''; ?>>Agreement Sent</option>
                        <option value="agreement_signed" <?php echo $filters['status'] === 'agreement_signed' ? 'selected' : ''; ?>>Agreement Signed</option>
                        <option value="not_suitable" <?php echo $filters['status'] === 'not_suitable' ? 'selected' : ''; ?>>Not Suitable</option>
                        <option value="withdrawn" <?php echo $filters['status'] === 'withdrawn' ? 'selected' : ''; ?>>Withdrawn</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Specialism</label>
                    <select name="specialism" class="form-control">
                        <option value="">All Specialisms</option>
                        <?php foreach ($specialisms as $spec): ?>
                            <option value="<?php echo htmlspecialchars($spec['primary_specialism']); ?>" <?php echo $filters['primary_specialism'] === $spec['primary_specialism'] ? 'selected' : ''; ?>>
                                <?php echo Applicant::formatSpecialism($spec['primary_specialism']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="filter-group">
                    <label>CIPD Level</label>
                    <select name="cipd" class="form-control">
                        <option value="">All Levels</option>
                        <?php foreach ($cipdLevels as $level): ?>
                            <option value="<?php echo htmlspecialchars($level['cipd_level']); ?>" <?php echo $filters['cipd_level'] === $level['cipd_level'] ? 'selected' : ''; ?>>
                                <?php echo Applicant::formatCipdLevel($level['cipd_level']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="filter-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i> Filter
                    </button>
                    <a href="applicants.php" class="btn btn-outline">
                        <i class="fas fa-times"></i> Clear
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Results -->
<div class="card">
    <div class="card-header">
        <h2>
            <?php echo $totalCount; ?> Applicant<?php echo $totalCount !== 1 ? 's' : ''; ?>
            <?php if (!empty(array_filter($filters))): ?>
                <small style="font-weight: normal; color: var(--text-secondary);">(filtered)</small>
            <?php endif; ?>
        </h2>
        <div style="display: flex; gap: 0.5rem;">
            <a href="add-applicant.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Applicant</a>
            <a href="export.php?<?php echo http_build_query($filters); ?>" class="btn btn-outline btn-sm">
                <i class="fas fa-download"></i> Export CSV
            </a>
        </div>
    </div>
    <div class="card-body" style="padding: 0;">
        <?php if (empty($applicants)): ?>
            <div class="empty-state">
                <i class="fas fa-search"></i>
                <p>No applicants found matching your criteria</p>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Primary Specialism</th>
                            <th>CIPD Level</th>
                            <th>Experience</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Applied</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($applicants as $applicant): ?>
                            <tr>
                                <td>
                                    <a href="applicant.php?id=<?php echo $applicant['id']; ?>">
                                        <strong><?php echo htmlspecialchars($applicant['full_name']); ?></strong>
                                    </a>
                                    <br>
                                    <small style="color: var(--text-secondary);"><?php echo htmlspecialchars($applicant['email']); ?></small>
                                </td>
                                <td><?php echo htmlspecialchars($applicant['location']); ?></td>
                                <td><?php echo Applicant::formatSpecialism($applicant['primary_specialism']); ?></td>
                                <td><?php echo Applicant::formatCipdLevel($applicant['cipd_level']); ?></td>
                                <td><?php echo htmlspecialchars($applicant['years_experience']); ?> years</td>
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

            <?php if ($totalPages > 1): ?>
                <div class="pagination">
                    <?php if ($page > 1): ?>
                        <a href="?<?php echo http_build_query(array_merge($filters, ['page' => $page - 1])); ?>">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    <?php endif; ?>

                    <?php
                    $startPage = max(1, $page - 2);
                    $endPage = min($totalPages, $page + 2);

                    if ($startPage > 1) {
                        echo '<a href="?' . http_build_query(array_merge($filters, ['page' => 1])) . '">1</a>';
                        if ($startPage > 2) echo '<span>...</span>';
                    }

                    for ($i = $startPage; $i <= $endPage; $i++):
                        if ($i == $page):
                            ?>
                            <span class="current"><?php echo $i; ?></span>
                        <?php else: ?>
                            <a href="?<?php echo http_build_query(array_merge($filters, ['page' => $i])); ?>"><?php echo $i; ?></a>
                        <?php
                        endif;
                    endfor;

                    if ($endPage < $totalPages) {
                        if ($endPage < $totalPages - 1) echo '<span>...</span>';
                        echo '<a href="?' . http_build_query(array_merge($filters, ['page' => $totalPages])) . '">' . $totalPages . '</a>';
                    }
                    ?>

                    <?php if ($page < $totalPages): ?>
                        <a href="?<?php echo http_build_query(array_merge($filters, ['page' => $page + 1])); ?>">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
