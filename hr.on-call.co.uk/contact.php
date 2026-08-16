<?php
require_once 'config.php';

$pageTitle = 'Contact';
$pageDescription = 'Contact HR On Call for expert remote HR support across the UK. Book a free discovery call or send us a message to discuss your HR needs.';
$pageKeywords = 'contact HR On Call, remote HR consultant contact, HR support enquiry, book HR consultation, virtual HR consultant UK';

$rebuilt = true;
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';

// reCAPTCHA site key
$recaptchaSiteKey = '6LeLIz8tAAAAAGykNt1zj5gYa7k84OT2g--LOBa3';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Contact Us</div>
      <h1>Get in Touch</h1>
      <p>Ready to discuss how we can support your business with expert, remote HR services?</p>
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
          <div class="oc-ico"><i class="fas fa-laptop"></i></div>
          <h3>Remote</h3>
          <p>Serving businesses<br>across the UK</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT OPTIONS -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap oc-split" style="align-items:start;">

      <!-- Book a Call -->
      <div id="book-call">
        <div class="oc-eyebrow"><span></span>Free Call</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Book a Discovery Call</h2>
        <div class="oc-card" style="margin-top:24px; padding:0; overflow:hidden;">
          <div id="my-cal-inline" style="width:100%;height:100%;overflow:auto;"></div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-container">
        <div class="oc-eyebrow"><span></span>Get In Touch</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Send Me a Message</h2>
        <div class="oc-card" style="margin-top:24px;">
          <form class="oc-form contact-form" id="contactForm" action="process-contact.php" method="POST">
            <div class="oc-field">
              <label for="name">Name <span class="required">*</span></label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="oc-field">
              <label for="email">Email <span class="required">*</span></label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="oc-field-row">
              <div class="oc-field">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
              </div>

              <div class="oc-field">
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
              </div>
            </div>

            <div class="oc-field">
              <label for="message">Message <span class="required">*</span></label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">

            <button type="submit" class="oc-btn oc-pink">Send Message</button>
          </form>
          <div id="form-result" style="margin-top: 20px; display: none;"></div>
        </div>
      </div>

    </div>
  </section>

</div>

<!-- reCAPTCHA v3 Script -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptchaSiteKey; ?>"></script>

<!-- Cal.com Embed Script -->
<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://app.cal.com"});
Cal("inline", {
    elementOrSelector: "#my-cal-inline",
    calLink: "hr-on-call/discovery-call",
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

<!-- Form Submission Script -->
<script>
const contactForm = document.getElementById('contactForm');
const formResult = document.getElementById('form-result');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        formResult.style.display = 'block';
        formResult.innerHTML = '<div style="text-align: center;"><p>Sending message...</p></div>';

        // Execute reCAPTCHA v3
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo $recaptchaSiteKey; ?>', {action: 'contact'}).then(function(token) {
                document.getElementById('recaptchaResponse').value = token;

                const formData = new FormData(contactForm);

                fetch(contactForm.getAttribute('action'), {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    formResult.innerHTML = '<div style="text-align: center; color: #4caf50;"><p>' + data + '</p></div>';
                    contactForm.reset();
                })
                .catch(error => {
                    formResult.innerHTML = '<div style="text-align: center; color: #f44336;"><p>There was a problem sending your message. Please try again.</p></div>';
                    console.error('Error:', error);
                });
            });
        });
    });
}
</script>

<?php include 'includes/footer.php'; ?>
