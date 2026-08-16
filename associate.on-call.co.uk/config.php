<?php
/**
 * HR On Call - Configuration File
 */

// Site Settings
define('SITE_NAME', 'HR On Call');
define('SITE_URL', 'https://associate.on-call.co.uk');
define('SITE_EMAIL', 'hello@on-call.co.uk');

// Company Details
define('COMPANY_NAME', 'HR On Call Ltd');
define('COMPANY_NUMBER', '16891106');

// Error reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Europe/London');
