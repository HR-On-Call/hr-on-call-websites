<?php
/**
 * Agreement Download/View Handler
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

if (!$applicant || !$applicant['agreement_pdf_path']) {
    header('HTTP/1.0 404 Not Found');
    exit('Agreement not found');
}

// Check if the file exists (try both .html and .pdf extensions)
$filepath = $applicant['agreement_pdf_path'];
if (!file_exists($filepath)) {
    // Try with .html extension if .pdf doesn't exist
    $htmlPath = preg_replace('/\.pdf$/i', '.html', $filepath);
    if (file_exists($htmlPath)) {
        $filepath = $htmlPath;
    } else {
        header('HTTP/1.0 404 Not Found');
        exit('Agreement file not found');
    }
}

$filename = basename($filepath);

// Detect file type
$isHtml = false;
$contents = file_get_contents($filepath, false, null, 0, 100);
if (strpos($contents, '<!DOCTYPE html') !== false || strpos($contents, '<html') !== false) {
    $isHtml = true;
}

if ($isHtml) {
    // Serve HTML inline (opens in browser for viewing/printing)
    header('Content-Type: text/html; charset=UTF-8');
    header('Content-Disposition: inline; filename="' . str_replace('.html', '.pdf', $filename) . '"');
} else {
    // Serve PDF as attachment
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
}

header('Content-Length: ' . filesize($filepath));
header('Cache-Control: no-cache, must-revalidate');

readfile($filepath);
exit;
