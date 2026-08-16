<?php
/**
 * Process Practice On Call Interest Registration Form
 * Submits to the central prospects API at clients.on-call.co.uk
 */

require_once 'config.php';

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . SITE_URL . '/practice-on-call-register');
    exit;
}

// Get and sanitize form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$teamSize = trim($_POST['team_size'] ?? '');
$message = trim($_POST['message'] ?? '');
$consent = isset($_POST['consent']);

// Basic validation
$errors = [];
if (empty($name)) $errors[] = 'Name is required';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
if (!$consent) $errors[] = 'You must consent to being contacted';

if (!empty($errors)) {
    header('Location: ' . SITE_URL . '/practice-on-call-register?error=1');
    exit;
}

// Submit to central prospects API
$apiUrl = 'https://clients.on-call.co.uk/prospect-register-api.php';

$data = [
    'name' => $name,
    'email' => $email,
    'company' => $company,
    'team_size' => $teamSize,
    'message' => $message,
    'consent' => $consent ? 1 : 0,
    'product' => 'crm',
    'source' => 'practice-on-call-register'
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json',
    'User-Agent: HROnCall-ProspectForm/1.0'
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Check response
if ($httpCode >= 200 && $httpCode < 300) {
    $result = json_decode($response, true);
    if (!empty($result['success'])) {
        header('Location: ' . SITE_URL . '/practice-on-call-register?success=1');
        exit;
    }
}

// Log error for debugging
error_log("Prospect registration failed: HTTP $httpCode - $curlError - $response");

// Redirect with error
header('Location: ' . SITE_URL . '/practice-on-call-register?error=send');
exit;
