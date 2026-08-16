<?php
/**
 * Headshot Download Handler
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

if (!$applicant || !$applicant['profile_headshot'] || !file_exists($applicant['profile_headshot'])) {
    header('HTTP/1.0 404 Not Found');
    exit('Headshot not found');
}

$filePath = $applicant['profile_headshot'];
$extension = pathinfo($filePath, PATHINFO_EXTENSION);
$safeName = preg_replace('/[^a-zA-Z0-9-_]/', '-', $applicant['full_name']);
$downloadName = 'headshot-' . $safeName . '.' . $extension;

header('Content-Type: ' . mime_content_type($filePath));
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Content-Length: ' . filesize($filePath));
header('Cache-Control: no-cache, must-revalidate');

readfile($filePath);
exit;
