<?php
/**
 * ATS Configuration File
 * Update these settings for your environment
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'CHANGEME_DB_NAME');
define('DB_USER', 'CHANGEME_DB_USER');
define('DB_PASS', 'CHANGEME_DB_PASS');

// Site Configuration
define('ATS_SITE_URL', 'https://associate.on-call.co.uk');
define('ATS_ADMIN_URL', ATS_SITE_URL . '/ats/admin');

// Email Configuration (Brevo)
define('BREVO_API_KEY', 'CHANGEME_BREVO_API_KEY');
define('EMAIL_FROM_ADDRESS', 'grace@on-call.co.uk');
define('EMAIL_FROM_NAME', 'Grace Pariser');
define('EMAIL_REPLY_TO', 'grace@on-call.co.uk');
define('ADMIN_NOTIFICATION_EMAIL', 'grace@on-call.co.uk');  // Where to send new application alerts

// File Upload Configuration
define('UPLOAD_DIR', __DIR__ . '/uploads/cvs/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024);  // 5MB
define('ALLOWED_FILE_TYPES', ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']);
define('ALLOWED_EXTENSIONS', ['pdf', 'doc', 'docx']);

// Session Configuration
define('SESSION_NAME', 'hroncall_ats_session');
define('SESSION_LIFETIME', 3600);  // 1 hour

// Security
define('CSRF_TOKEN_NAME', 'ats_csrf_token');

// Timezone
date_default_timezone_set('Europe/London');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log');

// Create upload directory if it doesn't exist
if (!file_exists(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0755, true);
}

// Create logs directory if it doesn't exist
if (!file_exists(__DIR__ . '/logs')) {
    mkdir(__DIR__ . '/logs', 0755, true);
}

