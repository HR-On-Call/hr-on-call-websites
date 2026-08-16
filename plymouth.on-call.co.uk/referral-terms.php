<?php
require_once 'config.php';

$pageTitle = 'Referral Terms';
$pageDescription = 'Terms and conditions for the HR On Call referral scheme for accountants, solicitors and professional service providers.';
$pageKeywords = 'HR On Call referral terms, referrer conditions, HR referral scheme terms';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Legal</div>
      <h1>Referral Scheme Terms and Conditions</h1>
      <p>HR On Call Ltd</p>
    </div>
  </section>

  <!-- TERMS CONTENT -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-legal">
        <p class="updated"><em>Last updated: <?php echo date('d F Y'); ?></em></p>

        <h2>1. Eligibility</h2>
        <p><strong>1.1</strong> The referral scheme is open to professional service providers including but not limited to accountants, solicitors, business consultants and financial advisors.</p>
        <p><strong>1.2</strong> Referrers must be operating a legitimate business and be able to provide appropriate tax documentation (UTR or company registration).</p>
        <p><strong>1.3</strong> HR On Call Ltd reserves the right to decline participation from any individual or organisation at its sole discretion.</p>

        <h2>2. Referral Process</h2>
        <p><strong>2.1</strong> A valid referral occurs when:</p>
        <ul>
          <li>The referrer introduces a potential client to HR On Call Ltd</li>
          <li>The introduction is made with the client's knowledge and consent</li>
          <li>The client specifically mentions the referrer's name when first making contact</li>
          <li>The client subsequently engages HR On Call Ltd for services</li>
        </ul>
        <p><strong>2.2</strong> Referrals must be made in good faith and the referrer must have legitimate grounds for believing the client requires HR services.</p>
        <p><strong>2.3</strong> Self-referrals, family members, or existing clients of HR On Call Ltd do not qualify for referral fees.</p>

        <h2>3. Referral Fees</h2>
        <p><strong>3.1</strong> Monthly Retainer Services:</p>
        <ul>
          <li>Referral fee: 10% of the initial contract value</li>
          <li>Payment due within 30 days of client payment to HR On Call Ltd</li>
        </ul>
        <p><strong>3.2</strong> One-Off Document Services:</p>
        <ul>
          <li>Employment Contracts or Handbooks (£600 + VAT): £100 referral fee</li>
          <li>ACAS Early Conciliation Support (£500 + VAT): £100 referral fee</li>
          <li>Settlement Agreements (£750 + VAT): £200 referral fee</li>
        </ul>
        <p><strong>3.3</strong> Referral fees are calculated on the gross service fee excluding VAT.</p>
        <p><strong>3.4</strong> Only one referral fee is payable per client, regardless of multiple services purchased or contract renewals.</p>

        <h2>4. Payment Terms</h2>
        <p><strong>4.1</strong> Referral fees will be paid within 30 days of HR On Call Ltd receiving full payment from the referred client.</p>
        <p><strong>4.2</strong> Payment will be made by bank transfer to the referrer's nominated business account.</p>
        <p><strong>4.3</strong> VAT will be added to referral fees where the referrer is VAT registered and provides a valid VAT invoice.</p>
        <p><strong>4.4</strong> Referrers are responsible for declaring referral income for tax purposes.</p>

        <h2>5. Conditions and Limitations</h2>
        <p><strong>5.1</strong> HR On Call Ltd reserves the right to refuse service to any referred client without affecting referral fee entitlement (provided the referral was made in good faith).</p>
        <p><strong>5.2</strong> Referral fees are only payable on successfully completed services where full payment has been received.</p>
        <p><strong>5.3</strong> If a client defaults on payment or cancels services before completion, no referral fee is payable.</p>
        <p><strong>5.4</strong> Referral fees cannot be offset against any debts owed by the referrer to HR On Call Ltd.</p>

        <h2>6. Referrer Obligations</h2>
        <p><strong>6.1</strong> Referrers must not make any representations about HR On Call Ltd' services beyond factual information provided in marketing materials.</p>
        <p><strong>6.2</strong> Referrers must not quote prices or make commitments on behalf of HR On Call Ltd.</p>
        <p><strong>6.3</strong> Referrers must maintain appropriate professional indemnity insurance for their own services.</p>
        <p><strong>6.4</strong> Referrers must comply with all applicable data protection laws when sharing client information.</p>

        <h2>7. Confidentiality</h2>
        <p><strong>7.1</strong> Both parties agree to maintain confidentiality regarding client information and commercial terms.</p>
        <p><strong>7.2</strong> Referrers must not use any confidential information gained through the referral relationship for their own commercial benefit.</p>

        <h2>8. Disputes</h2>
        <p><strong>8.1</strong> Any disputes regarding referral fees must be raised within 30 days of the disputed payment due date.</p>
        <p><strong>8.2</strong> HR On Call Ltd will investigate all genuine disputes and respond within 14 days.</p>
        <p><strong>8.3</strong> The decision of HR On Call Ltd on referral fee disputes is final.</p>

        <h2>9. Termination</h2>
        <p><strong>9.1</strong> Either party may terminate participation in the referral scheme at any time by giving 30 days' written notice.</p>
        <p><strong>9.2</strong> Termination does not affect referral fees already earned on services completed before the termination date.</p>
        <p><strong>9.3</strong> HR On Call Ltd may immediately terminate a referrer's participation for:</p>
        <ul>
          <li>Breach of these terms and conditions</li>
          <li>Unprofessional conduct</li>
          <li>Misrepresentation of services or terms</li>
        </ul>

        <h2>10. General Terms</h2>
        <p><strong>10.1</strong> These terms and conditions may be updated at any time. Referrers will be notified of material changes.</p>
        <p><strong>10.2</strong> Continued participation in the scheme after notification constitutes acceptance of updated terms.</p>
        <p><strong>10.3</strong> These terms are governed by English law and subject to the exclusive jurisdiction of English courts.</p>
        <p><strong>10.4</strong> If any provision is found to be unenforceable, the remaining provisions shall continue in full force.</p>
        <p><strong>10.5</strong> No employment, partnership or agency relationship is created between HR On Call Ltd and referrers.</p>

        <p><em>For questions about these terms, please visit the <a href="contact.php">contact page</a></em></p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div style="margin-top:28px;">
        <a href="accountants.php" class="oc-btn oc-pink">Back to Referrer Signup <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
