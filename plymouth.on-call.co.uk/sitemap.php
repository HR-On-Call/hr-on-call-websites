<?php
/**
 * Dynamic XML sitemap.
 *
 * Served at /sitemap.xml via an .htaccess rewrite. Static pages use their file
 * modification time as <lastmod>; blog posts come from the registry and only
 * appear once their publish date has passed (getPublishedPosts), so newly
 * scheduled posts add themselves automatically and future ones stay hidden.
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/blog/posts.php';

header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: public, max-age=3600');

function sm_lastmod(string $file): string
{
    $path = __DIR__ . '/' . $file;
    return file_exists($path) ? date('Y-m-d', filemtime($path)) : date('Y-m-d');
}

// path => [priority, changefreq, source file for lastmod]
$staticPages = [
    '/'                           => ['1.0', 'weekly',  'index.php'],
    '/about.php'                  => ['0.8', 'monthly', 'about.php'],
    '/services.php'               => ['0.8', 'monthly', 'services.php'],
    '/retainers.php'              => ['0.9', 'monthly', 'retainers.php'],
    '/documents.php'              => ['0.9', 'monthly', 'documents.php'],
    '/workplace-issues.php'       => ['0.9', 'monthly', 'workplace-issues.php'],
    '/pay-as-you-go.php'          => ['0.9', 'monthly', 'pay-as-you-go.php'],
    '/employment-rights-act'      => ['0.9', 'monthly', 'employment-rights-act.php'],
    '/hr-consultant-devon.php'    => ['0.8', 'monthly', 'hr-consultant-devon.php'],
    '/hr-consultant-cornwall.php' => ['0.8', 'monthly', 'hr-consultant-cornwall.php'],
    '/contact.php'                => ['0.8', 'monthly', 'contact.php'],
    '/faq.php'                    => ['0.7', 'monthly', 'faq.php'],
    '/accountants.php'            => ['0.7', 'monthly', 'accountants.php'],
    '/blog/'                      => ['0.8', 'weekly',  'blog/index.php'],
    '/privacy-policy.php'         => ['0.3', 'yearly',  'privacy-policy.php'],
    '/cookie-policy.php'          => ['0.3', 'yearly',  'cookie-policy.php'],
    '/referral-terms.php'         => ['0.3', 'yearly',  'referral-terms.php'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($staticPages as $path => $meta) {
    list($priority, $changefreq, $file) = $meta;
    echo "    <url>\n";
    echo "        <loc>" . SITE_URL . htmlspecialchars($path) . "</loc>\n";
    echo "        <lastmod>" . sm_lastmod($file) . "</lastmod>\n";
    echo "        <changefreq>" . $changefreq . "</changefreq>\n";
    echo "        <priority>" . $priority . "</priority>\n";
    echo "    </url>\n";
}

// Blog posts: only those whose publish date has arrived
foreach (getPublishedPosts($blogPosts) as $post) {
    echo "    <url>\n";
    echo "        <loc>" . SITE_URL . "/blog/" . htmlspecialchars($post['slug']) . ".php</loc>\n";
    echo "        <lastmod>" . htmlspecialchars($post['date']) . "</lastmod>\n";
    echo "        <changefreq>yearly</changefreq>\n";
    echo "        <priority>0.7</priority>\n";
    echo "    </url>\n";
}

echo '</urlset>' . "\n";
