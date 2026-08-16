<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/ats/config.php';
require_once dirname(__DIR__) . '/ats/includes/Database.php';

$db = Database::getInstance();

// Handle token regeneration request (full reset for testing)
if (isset($_GET['regen']) && is_numeric($_GET['regen'])) {
    $id = (int)$_GET['regen'];
    $token = bin2hex(random_bytes(32));
    $db->update('applicants', [
        'agreement_token' => $token,
        'agreement_token_expires' => date('Y-m-d H:i:s', strtotime('+14 days')),
        'agreement_sent_at' => date('Y-m-d H:i:s'),
        'status' => 'agreement_sent',
        'agreement_signed_at' => null,
        'agreement_pdf_path' => null,
        'agreement_ip_address' => null,
        'agreement_user_agent' => null
    ], 'id = ?', [$id]);
    echo "<p style='color:green'><strong>Token regenerated and signing status reset for ID {$id}!</strong></p>";
}

echo "<h3>All applicants and their tokens:</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Name</th><th>Status</th><th>Token</th><th>Test Link</th><th>Regenerate</th></tr>";

$applicants = $db->fetchAll("SELECT id, full_name, status, agreement_token FROM applicants ORDER BY id DESC");
foreach ($applicants as $row) {
    $tokenDisplay = $row['agreement_token'] ? substr($row['agreement_token'], 0, 20) . '...' : 'NULL';
    $link = $row['agreement_token'] ? "<a href='/sign/{$row['agreement_token']}'>Test</a>" : '-';
    $regen = "<a href='?regen={$row['id']}'>Regenerate</a>";
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['full_name']}</td>";
    echo "<td>{$row['status']}</td>";
    echo "<td>{$tokenDisplay}</td>";
    echo "<td>{$link}</td>";
    echo "<td>{$regen}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<p><em>Click 'Regenerate' to create a fresh token for testing.</em></p>";
