<?php
/**
 * Blog post publish-date guard.
 * Include this at the top of every blog post file.
 * Takes $postDate (YYYY-MM-DD) and returns 404 if the post is future-dated.
 */

if (isset($postDate) && $postDate > date('Y-m-d')) {
    http_response_code(404);
    // Fall back to the 404 handler defined in .htaccess (which serves homepage)
    // but make sure search engines see a 404 status.
    header('HTTP/1.1 404 Not Found');
    require_once __DIR__ . '/../index.php';
    exit;
}
