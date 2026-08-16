<?php
require_once 'config.php';

$pageTitle = 'Client Vault Document List';
$pageDescription = 'Complete list of HR documents included in The Client Vault, showing core documents (included as standard) and optional documents.';

// The document data lives in The Client Vault demo database on this same server.
// Read its credentials from that site's .env (keeps secrets out of this file).
$rows = [];
$dbError = false;
$envPath = '/home/nfc6da5/clientvault.thehrvault.co.uk/.env';
$env = [];
if (is_readable($envPath)) {
    foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) continue;
        list($k, $v) = explode('=', $line, 2);
        $env[trim($k)] = trim($v);
    }
}
try {
    if (empty($env['DB_NAME'])) throw new Exception('config');
    $pdo = new PDO(
        'mysql:host=' . ($env['DB_HOST'] ?? 'localhost') . ';dbname=' . $env['DB_NAME'] . ';charset=utf8mb4',
        $env['DB_USER'] ?? '', $env['DB_PASS'] ?? '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $rows = $pdo->query("
        SELECT d.title, c.name AS cat_name, c.is_optional, c.parent_id,
               p.name AS parent_name
        FROM documents d
        INNER JOIN categories c ON c.id = d.category_id
        LEFT JOIN categories p ON p.id = c.parent_id
        WHERE d.status = 'published' AND (d.is_hidden = 0 OR d.is_hidden IS NULL)
        ORDER BY c.is_optional ASC,
                 COALESCE(p.sort_order, c.sort_order) ASC, COALESCE(p.name, c.name) ASC,
                 c.sort_order ASC, c.name ASC, d.title ASC
    ")->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    $dbError = true;
}

// Build trees: [parentName][subName => [titles]]  ('' subName = docs directly on a top-level category)
$coreTree = []; $optTree = [];
$coreCount = 0; $optCount = 0;
foreach ($rows as $r) {
    $parentKey = !empty($r['parent_name']) ? $r['parent_name'] : $r['cat_name'];
    $subKey    = !empty($r['parent_name']) ? $r['cat_name'] : '';
    if ((int)$r['is_optional']) { $optTree[$parentKey][$subKey][] = $r['title']; $optCount++; }
    else { $coreTree[$parentKey][$subKey][] = $r['title']; $coreCount++; }
}

function cvd_render_tree($tree, $accent) {
    foreach ($tree as $parentName => $subs) {
        $total = 0; foreach ($subs as $t) $total += count($t);
        echo '<div style="background:#fff;border:1px solid #ECE8E1;border-radius:14px;box-shadow:0 4px 16px rgba(16,30,51,0.06);padding:1.25rem 1.5rem;margin-bottom:1rem;">';
        echo '<h3 style="margin:0 0 0.5rem;color:#1A2E4A;font-size:1.15rem;">' . htmlspecialchars($parentName)
           . ' <span style="color:#98A2B3;font-weight:500;font-size:0.85rem;">(' . $total . ')</span></h3>';
        foreach ($subs as $subName => $titles) {
            if ($subName !== '') {
                echo '<h4 style="margin:1rem 0 0.15rem;color:' . $accent . ';font-size:0.98rem;">' . htmlspecialchars($subName)
                   . ' <span style="color:#98A2B3;font-weight:500;font-size:0.82rem;">(' . count($titles) . ')</span></h4>';
            }
            echo '<ul style="columns:2;column-gap:2rem;margin:0.25rem 0 0;padding-left:1.1rem;">';
            foreach ($titles as $t) {
                echo '<li style="margin-bottom:0.35rem;font-size:0.92rem;break-inside:avoid;color:#2D3748;">' . htmlspecialchars($t) . '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content" style="text-align:center;">
            <div class="hero-logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-client-vault-navy.webp" alt="The Client Vault" style="max-height:70px;">
            </div>
            <h1>Client Vault Document List</h1>
            <p class="hero-subtitle" style="max-width:760px;margin:0.5rem auto 0;">Everything in The Client Vault at a glance. <strong><?php echo $coreCount; ?></strong> core documents are included as standard; <strong><?php echo $optCount; ?></strong> optional documents can be switched on from the admin area.</p>
            <p style="max-width:760px;margin:0.75rem auto 0;opacity:0.9;">New documents are added all the time, both on request and as part of our monthly updates, so the library keeps growing.</p>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container" style="max-width:1000px;">
        <?php if ($dbError): ?>
            <p style="text-align:center;color:#667085;">The live document list is temporarily unavailable. Please try again shortly or <a href="<?php echo SITE_URL; ?>/the-client-vault">get in touch</a>.</p>
        <?php else: ?>
            <?php if (!empty($coreTree)): ?>
            <h2 style="border-bottom:3px solid #1A2E4A;padding-bottom:0.4rem;">Core documents</h2>
            <p style="color:#667085;margin:0.5rem 0 1.5rem;">Included as standard in every vault.</p>
            <?php cvd_render_tree($coreTree, '#1A2E4A'); ?>
            <?php endif; ?>

            <?php if (!empty($optTree)): ?>
            <h2 style="border-bottom:3px solid #DB2777;padding-bottom:0.4rem;margin-top:2.5rem;">Optional documents</h2>
            <p style="color:#667085;margin:0.5rem 0 1.5rem;">Cover more complex situations. Switch these on from the admin area when you need them.</p>
            <?php cvd_render_tree($optTree, '#DB2777'); ?>
            <?php endif; ?>
        <?php endif; ?>

        <p style="text-align:center;margin-top:2rem;"><a href="<?php echo SITE_URL; ?>/the-client-vault" class="oc-btn oc-pink" style="display:inline-block;">Back to The Client Vault</a></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
