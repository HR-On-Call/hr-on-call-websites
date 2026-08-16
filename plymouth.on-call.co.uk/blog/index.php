<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/posts.php';

// Only show posts whose date is today or earlier
$blogPosts = getPublishedPosts($blogPosts);

$pageTitle = 'HR Blog | Employment Law & HR Advice for Plymouth Businesses';
$pageDescription = 'Practical HR and employment law guidance from a CIPD qualified consultant. Covering grievances, dismissals, settlement agreements and more for UK employers.';
$pageKeywords = 'HR blog, employment law blog UK, HR advice Plymouth, HR guidance Devon, employment law articles, HR consultant blog';

include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <h1>HR &amp; Employment Law Insights</h1>
            <p class="hero-subtitle">Practical guidance for UK employers – from disciplinaries and grievances to settlement agreements, dismissals and the commercial reality of running a team.</p>
        </div>
    </div>
</section>

<!-- Blog Listing -->
<section class="section">
    <div class="container">
        <div class="blog-grid">
<?php foreach ($blogPosts as $post): ?>
            <article class="blog-card">
                <div class="blog-card-body">
                    <div class="blog-card-meta">
                        <span class="blog-category"><?php echo htmlspecialchars($post['category']); ?></span>
                        <span class="blog-date"><?php echo date('j F Y', strtotime($post['date'])); ?></span>
                    </div>
                    <h2 class="blog-card-title">
                        <a href="/blog/<?php echo $post['slug']; ?>.php"><?php echo htmlspecialchars($post['title']); ?></a>
                    </h2>
                    <p class="blog-card-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <div class="blog-card-footer">
                        <span class="blog-read-time"><?php echo htmlspecialchars($post['readTime']); ?></span>
                        <a href="/blog/<?php echo $post['slug']; ?>.php" class="blog-read-more">Read article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </article>
<?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Dealing With Something Specific?</h2>
            <p>If you're navigating a tricky HR situation, I'm here to help. Book a discovery call to discuss your options.</p>
            <a href="/contact.php" class="btn btn-primary btn-large">Get in Touch</a>
        </div>
    </div>
</section>

<!-- Blog Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "HR On Call Blog",
    "description": "Practical HR and employment law guidance for UK employers from a CIPD qualified consultant.",
    "url": "https://plymouth.on-call.co.uk/blog/",
    "publisher": {
        "@type": "Organization",
        "name": "HR On Call",
        "logo": {
            "@type": "ImageObject",
            "url": "https://plymouth.on-call.co.uk/assets/images/favicon-512x512.png"
        }
    },
    "blogPost": [
<?php
$entries = [];
foreach ($blogPosts as $post) {
    $entries[] = '        {
            "@type": "BlogPosting",
            "headline": ' . json_encode($post['title']) . ',
            "datePublished": "' . $post['date'] . '",
            "url": "https://plymouth.on-call.co.uk/blog/' . $post['slug'] . '.php",
            "author": {"@type": "Person", "name": "Grace Pariser"}
        }';
}
echo implode(",\n", $entries);
?>

    ]
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
