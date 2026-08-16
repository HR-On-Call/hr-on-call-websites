<?php
/**
 * Export Applicants to CSV
 */

require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Applicant.php';

requireAuth();

$applicantModel = new Applicant();

// Get filter values (same as applicants.php)
$filters = [
    'status' => $_GET['status'] ?? '',
    'primary_specialism' => $_GET['specialism'] ?? '',
    'cipd_level' => $_GET['cipd'] ?? '',
    'search' => $_GET['search'] ?? '',
    'hourly_rate_min' => $_GET['rate_min'] ?? '',
    'hourly_rate_max' => $_GET['rate_max'] ?? ''
];

// Get all applicants matching filters
$applicants = $applicantModel->getAll($filters, 'created_at DESC');

// Set headers for CSV download
$filename = 'applicants_' . date('Y-m-d_His') . '.csv';
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: no-cache, must-revalidate');

// Open output stream
$output = fopen('php://output', 'w');

// Write CSV headers
fputcsv($output, [
    'ID',
    'Name',
    'Email',
    'Phone',
    'Location',
    'CIPD Level',
    'Years Experience',
    'Work Situation',
    'Primary Specialism',
    'Secondary Specialisms',
    'Hourly Rate',
    'PI Insurance',
    'Experience Summary',
    'Referral Source',
    'Status',
    'Applied Date',
    'LinkedIn',
    'Website'
]);

// Write data rows
foreach ($applicants as $applicant) {
    $secondarySpecialisms = json_decode($applicant['secondary_specialisms'] ?? '[]', true) ?: [];
    $secondaryList = array_map(function($s) {
        return Applicant::formatSpecialism($s);
    }, $secondarySpecialisms);

    fputcsv($output, [
        $applicant['id'],
        $applicant['full_name'],
        $applicant['email'],
        $applicant['phone'],
        $applicant['location'],
        Applicant::formatCipdLevel($applicant['cipd_level']),
        $applicant['years_experience'],
        ucwords(str_replace('_', ' ', $applicant['work_situation'])),
        Applicant::formatSpecialism($applicant['primary_specialism']),
        implode(', ', $secondaryList),
        '£' . number_format($applicant['hourly_rate'], 2),
        ucfirst(str_replace('_', ' ', $applicant['has_pi_insurance'])),
        $applicant['experience_summary'],
        $applicant['referral_source'],
        Applicant::formatStatus($applicant['status']),
        date('Y-m-d H:i', strtotime($applicant['created_at'])),
        $applicant['linkedin_url'],
        $applicant['website_url']
    ]);
}

fclose($output);
exit;
