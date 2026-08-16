<?php
/**
 * Admin Logout
 */

require_once 'includes/auth.php';

logout();
header('Location: login.php');
exit;
