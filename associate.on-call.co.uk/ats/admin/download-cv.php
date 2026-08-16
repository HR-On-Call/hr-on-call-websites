<?php
/**
 * CV Download Handler
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';

requireAuth();

$applicantModel = new Applicant();
$id = intval($_GET['id'] ?? 0);

if (!$id) {
    header('HTTP/1.0 404 Not Found');
    exit('Applicant not found');
}

$applicant = $applicantModel->getById($id);

if (!$applicant || !$applicant['cv_path'] || !file_exists($applicant['cv_path'])) {
    header('HTTP/1.0 404 Not Found');
    exit('CV not found');
}

$filename = $applicant['cv_filename'] ?: basename($applicant['cv_path']);
$mimeType = mime_content_type($applicant['cv_path']);

header('Content-Type: ' . $mimeType);
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($applicant['cv_path']));
header('Cache-Control: no-cache, must-revalidate');

readfile($applicant['cv_path']);
exit;
