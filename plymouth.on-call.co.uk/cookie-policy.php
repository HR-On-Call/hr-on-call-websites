<?php
require_once 'config.php';

$pageTitle = 'Cookie Policy';
$pageDescription = 'Cookie policy for HR On Call, professional HR consultant based in Plymouth serving businesses across Devon and Cornwall.';
$pageKeywords = 'HR On Call cookie policy, HR consultant Plymouth cookies, HR On Call privacy';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Legal</div>
      <h1>Cookie Policy</h1>
      <p>How we use cookies on our website</p>
    </div>
  </section>

  <!-- POLICY CONTENT -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-legal">
        <p class="updated"><strong>Last Updated:</strong> December 2024</p>

        <h2>1. Introduction</h2>
        <p>This Cookie Policy explains what cookies are and how HR On Call uses them on this website. We encourage you to read this policy so that you can understand what cookies are, how we use them, and the choices you have regarding their use.</p>

        <h2>2. What Are Cookies?</h2>
        <p>Cookies are small text files that are placed on your computer or mobile device when you visit a website. They are widely used to make websites work more efficiently and provide information to the website owners. Cookies can be "persistent" or "session" cookies. Persistent cookies remain on your device when you go offline, while session cookies are deleted as soon as you close your web browser.</p>

        <h2>3. How We Use Cookies</h2>
        <p>When you use and access our website, we may place a number of cookie files in your web browser. We use cookies for the following purposes:</p>
        <ul>
          <li><strong>Essential cookies:</strong> These are absolutely necessary for the website to function properly. This category only includes cookies that ensure basic functionalities and security features of the website. These cookies do not store any personal information.</li>
          <li><strong>Analytical/performance cookies:</strong> These cookies allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users find what they are looking for easily. We use Google Analytics for this purpose.</li>
          <li><strong>Functionality cookies:</strong> These are used to recognise you when you return to our website. This enables us to personalise content for you and remember your preferences (for example, your choice of language or region).</li>
        </ul>

        <h2>4. Third-Party Cookies</h2>
        <p>In addition to our own cookies, we may also use various third-party cookies to report usage statistics of the website and enhance the user experience. These third-party cookies may include:</p>
        <ul>
          <li><strong>Google Analytics:</strong> Used to analyze how visitors use our website.</li>
        </ul>

        <h2>5. What Are Your Choices Regarding Cookies?</h2>
        <p>If you prefer to avoid the use of cookies on the website, first you must disable the use of cookies in your browser and then delete the cookies saved in your browser associated with this website. You may use this option to prevent the use of cookies at any time.</p>
        <p>If you do not accept cookies, you might experience some inconvenience in your use of the website and some features may not function properly.</p>
        <p>To learn more about how to control cookie settings through your browser:</p>
        <ul>
          <li>Chrome: <a href="https://support.google.com/chrome/answer/95647" target="_blank">https://support.google.com/chrome/answer/95647</a></li>
          <li>Firefox: <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank">https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences</a></li>
          <li>Safari: <a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></li>
          <li>Internet Explorer: <a href="https://support.microsoft.com/en-gb/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">https://support.microsoft.com/en-gb/help/17442/windows-internet-explorer-delete-manage-cookies</a></li>
        </ul>

        <h2>6. Changes to the Cookie Policy</h2>
        <p>We may update this Cookie Policy from time to time to reflect changes in technology, regulation or our business practices. Any changes will become effective when we post the revised Cookie Policy on this website. We encourage you to check this page regularly to stay informed about our use of cookies.</p>

        <h2>7. Contact Us</h2>
        <p>If you have any questions about our use of cookies, please contact us:</p>
        <p>
          <?php echo COMPANY_NAME; ?><br>
          Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a><br>
          Phone: <a href="tel:+441752425526">01752 425526</a>
        </p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Need Expert HR Support?</h2>
      <p>Contact us today to discuss how we can help your business with professional, commercial HR solutions across Plymouth, Devon and Cornwall.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
