<?php
require_once 'config.php';

$pageTitle = 'Privacy Policy';
$pageDescription = 'Privacy policy for HR On Call, expert HR consultants delivering remote HR support to businesses across the UK.';
$pageKeywords = 'HR On Call privacy policy, HR consultant data protection, HR On Call GDPR';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Legal</div>
      <h1>Privacy Policy</h1>
      <p>How we collect, use, and protect your personal information</p>
    </div>
  </section>

  <!-- POLICY CONTENT -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-legal">
        <p class="updated"><strong>Last Updated:</strong> 1 July 2026</p>

        <h2>1. Introduction</h2>
        <p>Welcome to HR On Call. We respect your privacy and are committed to protecting your personal data. This privacy policy will inform you how we look after your personal data when you visit our website and tell you about your privacy rights and how the law protects you.</p>
        <p>This website is not intended for children and we do not knowingly collect data relating to children.</p>

        <h2>2. The Data We Collect About You</h2>
        <p>Personal data means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data).</p>
        <p>We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:</p>
        <ul>
          <li><strong>Identity Data</strong> includes first name, last name, title.</li>
          <li><strong>Contact Data</strong> includes email address, telephone numbers, company name, and postal address.</li>
          <li><strong>Technical Data</strong> includes internet protocol (IP) address, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform, and other technology on the devices you use to access this website.</li>
          <li><strong>Usage Data</strong> includes information about how you use our website.</li>
        </ul>

        <h2>3. How Is Your Personal Data Collected?</h2>
        <p>We use different methods to collect data from and about you including through:</p>
        <ul>
          <li><strong>Direct interactions.</strong> You may give us your Identity and Contact Data by filling in forms or by corresponding with us by post, phone, email or otherwise.</li>
          <li><strong>Automated technologies or interactions.</strong> As you interact with our website, we may automatically collect Technical Data about your equipment, browsing actions and patterns. We collect this personal data by using cookies and other similar technologies.</li>
        </ul>

        <h2>4. How We Use Your Personal Data</h2>
        <p>We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
        <ul>
          <li>Where we need to perform the contract we are about to enter into or have entered into with you.</li>
          <li>Where it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests.</li>
          <li>Where we need to comply with a legal obligation.</li>
        </ul>
        <p>Generally, we do not rely on consent as a legal basis for processing your personal data although we will get your consent before sending third-party direct marketing communications to you via email or text message. You have the right to withdraw consent to marketing at any time by contacting us.</p>

        <h2>5. Cookies</h2>
        <p>Cookies are small text files that are placed on your computer or mobile device when you browse websites. We use cookies for the following purposes:</p>
        <ul>
          <li><strong>Essential cookies:</strong> These are cookies that are required for the operation of our website. They include, for example, cookies that enable you to log into secure areas of the website.</li>
          <li><strong>Analytical/performance cookies:</strong> These allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.</li>
          <li><strong>Functionality cookies:</strong> These are used to recognise you when you return to our website. This enables us to personalise our content for you and remember your preferences.</li>
        </ul>
        <p>You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. If you disable or refuse cookies, please note that some parts of this website may become inaccessible or not function properly.</p>
        <p>For more information about the cookies we use, please see our <a href="cookie-policy.php">Cookie Policy</a>.</p>

        <h2>6. Data Security</h2>
        <p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know. They will only process your personal data on our instructions and they are subject to a duty of confidentiality.</p>
        <p>We have put in place procedures to deal with any suspected personal data breach and will notify you and any applicable regulator of a breach where we are legally required to do so.</p>

        <h2>7. Data Retention</h2>
        <p>We will only retain your personal data for as long as reasonably necessary to fulfil the purposes we collected it for, including for the purposes of satisfying any legal, regulatory, tax, accounting or reporting requirements. We may retain your personal data for a longer period in the event of a complaint or if we reasonably believe there is a prospect of litigation in respect to our relationship with you.</p>

        <h2>8. Your Legal Rights</h2>
        <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to:</p>
        <ul>
          <li>Request access to your personal data.</li>
          <li>Request correction of your personal data.</li>
          <li>Request erasure of your personal data.</li>
          <li>Object to processing of your personal data.</li>
          <li>Request restriction of processing your personal data.</li>
          <li>Request transfer of your personal data.</li>
          <li>Right to withdraw consent.</li>
        </ul>
        <p>If you wish to exercise any of the rights set out above, please contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>

        <h2>Your Right to Complain</h2>
        <p>Under the Data (Use and Access) Act 2025 you have the right to make a complaint to us directly, as the data controller, about how we handle your personal data, and we will make it easy for you to do so. We will acknowledge your complaint within 30 days and respond without undue delay.</p>
        <p>If you are not satisfied with our response, you also have the right to lodge a complaint with the Information Commissioner's Office (ICO), the UK supervisory authority for data protection issues, at <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a> or on 0303 123 1113.</p>

        <h2>9. Contact Details</h2>
        <p>If you have any questions about this privacy policy or our privacy practices, please contact us:</p>
        <p>
          <?php echo COMPANY_NAME; ?><br>
          Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a><br>
          Phone: <a href="tel:01752425526">01752 425526</a>
        </p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Need Expert HR Support?</h2>
      <p>Get in touch to find out how our team can support your business with professional, commercially-focused HR solutions, wherever you are in the UK.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
