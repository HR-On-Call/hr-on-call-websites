<?php
require_once 'config.php';

$pageTitle = 'Contact';
$pageDescription = 'Get in touch with HR On Call. Ready to discuss how we can support your consultancy? We\'d love to hear from you.';
$pageKeywords = 'contact HR consultant, HR support enquiry, book HR consultation, HR On Call contact';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Contact Us</div>
      <h1>Get in Touch</h1>
      <p>Ready to discuss how HR On Call can support your consultancy? We'd love to hear from you.</p>
    </div>
  </section>

  <!-- CONTACT INFO BAR (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-grid3">
        <div class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-envelope"></i></div>
          <h3>Email</h3>
          <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
        </div>
        <div class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-phone"></i></div>
          <h3>Phone</h3>
          <p><a href="tel:01752425526">01752 425526</a></p>
        </div>
        <div class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-map-marker-alt"></i></div>
          <h3>Location</h3>
          <p>Serving clients across the UK</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT OPTIONS -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <!-- Book a Call -->
      <div id="book-call" class="booking-container" style="max-width:820px; margin:0 auto;">
        <div class="oc-eyebrow"><span></span>Free Call</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Book a Discovery Call</h2>
        <div class="oc-card booking-widget-inline" style="margin-top:24px; padding:0; overflow:hidden;">
          <div id="my-cal-inline" style="width:100%;height:100%;overflow:auto;"></div>
        </div>
      </div>
    </div>
  </section>

</div>

<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://app.cal.com"});
Cal("inline", {
    elementOrSelector: "#my-cal-inline",
    calLink: "hr-on-call/book",
    layout: "month_view"
});
Cal("ui", {
    "cssVarsPerTheme": {
        "light": {"cal-brand": "#DB2777"},
        "dark": {"cal-brand": "#DB2777"}
    },
    "hideEventTypeDetails": false,
    "layout": "month_view"
});
</script>

<?php include 'includes/footer.php'; ?>
