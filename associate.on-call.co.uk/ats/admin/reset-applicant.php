<?php
require_once 'includes/auth.php';
require_once dirname(__DIR__) . '/includes/Database.php';
requireAuth();

$id = intval($_GET['id'] ?? 0);
if (!$id) { die('No ID. Use: ?id=1'); }

$db = Database::getInstance();
$db->query("UPDATE applicants SET status = 'approved', agreement_token = NULL, agreement_token_expires = NULL, agreement_sent_at = NULL, agreement_signed_at = NULL, agreement_pdf_path = NULL, agreement_ip_address = NULL, agreement_user_agent = NULL WHERE id = ?", [$id]);
$db->query("DELETE FROM agreement_fields WHERE applicant_id = ?", [$id]);
$db->query("DELETE FROM applicant_activity WHERE applicant_id = ?", [$id]);
$db->query("DELETE FROM email_log WHERE applicant_id = ?", [$id]);
$db->query("DELETE FROM applicant_notes WHERE applicant_id = ?", [$id]);

echo "Applicant $id reset. <a href='applicant.php?id=$id'>View</a> | <strong>Delete this file after use</strong>";
