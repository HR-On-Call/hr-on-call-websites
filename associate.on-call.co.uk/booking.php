<?php
require_once 'config.php';

$pageTitle = 'Book a Discovery Call';
$pageDescription = 'Book a free discovery call with Grace Pariser to discuss your HR consultancy needs and explore how HR On Call can support you.';
$pageKeywords = 'book HR consultation, HR discovery call, free HR consultation, speak to HR consultant';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <h1>Book Your Discovery Call</h1>
            <p class="hero-subtitle">Let's chat and see if we're a good fit to work together. This free call is a chance to discuss your needs and explore how I can help.</p>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section class="section booking-section bg-light">
    <div class="container">
        <div class="booking-widget">
            <div id="my-cal-inline-book" style="width:100%;height:800px;overflow:auto;"></div>
        </div>
    </div>
</section>

<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://app.cal.com"});
Cal("inline", {
    elementOrSelector: "#my-cal-inline-book",
    calLink: "hr-on-call/book",
    layout: "column_view"
});
Cal("ui", {
    "cssVarsPerTheme": {
        "light": {"cal-brand": "#DB2777"},
        "dark": {"cal-brand": "#DB2777"}
    },
    "hideEventTypeDetails": false,
    "layout": "column_view"
});
</script>

<?php include 'includes/footer.php'; ?>
