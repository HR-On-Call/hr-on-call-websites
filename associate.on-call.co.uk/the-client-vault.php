<?php
require_once 'config.php';

$pageTitle = 'The Client Vault';
$pageDescription = 'Your own branded HR document platform. Give your clients access to professional HR documents, videos and FAQs through your own white-label platform. Add value to retainers and create recurring revenue.';
$pageKeywords = 'white label HR platform, branded HR documents, HR document portal, client HR resources, HR consultancy recurring revenue, white-label HR solution';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
$demoUrl = 'https://clientvault.thehrvault.co.uk';
?>

<?php include 'includes/header.php'; ?>

<style>
/* The Client Vault sales-page extras (scoped to .oc) */
.oc .cv-hero-grid { display:grid; grid-template-columns:1.05fr 1fr; gap:48px; align-items:center; }
@media (max-width:900px){ .oc .cv-hero-grid{ grid-template-columns:1fr; gap:32px; } }
.oc .cv-mock { border-radius:14px; overflow:hidden; box-shadow:0 30px 70px rgba(15,30,51,.45); background:#fff; border:1px solid rgba(255,255,255,.15); }
.oc .cv-mock-bar { display:flex; align-items:center; gap:8px; padding:10px 14px; background:#0F1E33; }
.oc .cv-mock-bar .d { width:11px; height:11px; border-radius:50%; background:#3b4a63; display:inline-block; }
.oc .cv-mock-url { margin-left:12px; flex:1; background:#1d2f49; color:#9fb0c8; font-size:12px; padding:6px 12px; border-radius:6px; }
.oc .cv-mock-topnav { display:flex; align-items:center; gap:18px; padding:12px 18px; background:#fff; border-bottom:1px solid #ECE8E1; }
.oc .cv-mock-topnav strong { color:#1A2E4A; font-size:15px; }
.oc .cv-mock-topnav span { color:#4A5568; font-size:12.5px; }
.oc .cv-mock-topnav .cv-logo-ph { color:#1A2E4A; font-size:12px; font-weight:600; border:1px dashed #C9CDD6; border-radius:6px; padding:5px 12px; background:#FBF8F2; }
.oc .cv-mock-band { background:#1A2E4A; color:#fff; text-align:center; padding:22px 16px; }
.oc .cv-mock-band b { display:block; font-size:16px; }
.oc .cv-mock-band small { color:#c9d3e0; font-size:11.5px; }
.oc .cv-mock-cards { display:grid; grid-template-columns:repeat(3,1fr); gap:10px; padding:16px; background:#FBF8F2; }
.oc .cv-mc { border:1px solid #ECE8E1; border-radius:8px; overflow:hidden; background:#fff; }
.oc .cv-mc-img { height:38px; background:linear-gradient(135deg,#1A2E4A,var(--g,#DB2777)); }
.oc .cv-mc-t { font-size:10.5px; color:#1A2E4A; font-weight:600; padding:7px 8px; line-height:1.25; }
.oc .cv-import { display:flex; gap:16px; align-items:flex-start; background:#fff; border:1px solid var(--cream-bd); border-radius:14px; padding:22px 24px; max-width:720px; margin-left:auto; margin-right:auto; }
.oc .cv-addon-list { list-style:none; margin:14px 0 0; padding:0; }
.oc .cv-addon-list li { display:flex; justify-content:space-between; gap:14px; padding:10px 0; border-bottom:1px solid var(--cream-bd); }
.oc .cv-addon-list li:last-child { border-bottom:0; }
.oc .cv-addon-list .amt { color:#DB2777; font-weight:700; white-space:nowrap; }
/* Lighter revenue cards so they stand out on the navy section */
.oc .oc-navy .oc-cardn { background:#FBF8F2; border-color:#E7DFD0; }
.oc .oc-navy .oc-cardn h3 { color:#1A2E4A; }
.oc .oc-navy .oc-cardn p { color:#4A5568; }
.oc .oc-navy .oc-cardn .oc-ico { border-color:#DB2777; color:#DB2777; }
.oc .oc-navy .oc-cardn:hover { border-color:#DB2777; }
</style>

<div class="oc">

    <!-- Hero Section -->
    <section class="oc-hero">
        <div class="oc-wrap">
            <div class="cv-hero-grid">
                <div>
                    <div class="oc-eyebrow"><span></span>The Client Vault</div>
                    <h1>Your Own Branded HR Document Platform</h1>
                    <p>Give your clients access to professional HR documents, training videos and FAQs through your own white-label platform. Add value to retainers and create recurring revenue.</p>
                    <div class="oc-actions">
                        <a href="<?php echo $demoUrl; ?>" target="_blank" rel="noopener" class="oc-btn oc-pink">View the Live Demo</a>
                        <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="oc-btn oc-ghost">Sign Up Now</a>
                    </div>
                </div>
                <!-- Mock UI of the live demo -->
                <div class="cv-mock" aria-hidden="true">
                    <div class="cv-mock-bar"><span class="d"></span><span class="d"></span><span class="d"></span><div class="cv-mock-url">documents.your-domain.co.uk</div></div>
                    <div class="cv-mock-topnav"><span class="cv-logo-ph">Your logo here</span><span>Browse Library</span><span>Categories</span></div>
                    <div class="cv-mock-band"><b>Welcome to The Client Vault</b><small>You can add custom content here including images and videos</small></div>
                    <div class="cv-mock-cards">
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#DB2777"></div><div class="cv-mc-t">Recruitment</div></div>
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#2C5282"></div><div class="cv-mc-t">Contracts</div></div>
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#C9A962"></div><div class="cv-mc-t">Policies</div></div>
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#0F1E33"></div><div class="cv-mc-t">Disciplinary</div></div>
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#BE185D"></div><div class="cv-mc-t">Absence &amp; Leave</div></div>
                        <div class="cv-mc"><div class="cv-mc-img" style="--g:#1A2E4A"></div><div class="cv-mc-t">Performance</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="oc-sec">
        <div class="oc-wrap oc-readable">
            <div class="oc-head">
                <div class="oc-eyebrow"><span></span>How It Works</div>
                <h2>Add Value to Your Client Retainers</h2>
            </div>
            <div class="oc-prose oc-mt">
                <p>The Client Vault gives you a branded online platform stocked with essential HR documents, training videos and FAQs that you can offer to clients as part of your retainer services or as an additional revenue stream.</p>
                <p>Start with our professionally maintained document library, then make it your own: upload your own documents, add your own training videos and FAQs, and publish custom content, all under your consultancy's branding.</p>
            </div>
        </div>
    </section>

    <!-- What's Included Section -->
    <section class="oc-sec oc-cream">
        <div class="oc-wrap">
            <div class="oc-head">
                <div class="oc-eyebrow"><span></span>What's Included</div>
                <h2>Everything Your Clients Need</h2>
            </div>
            <div class="oc-grid4">
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-folder-open"></i></div>
                    <h3>Comprehensive Core Library</h3>
                    <p>A full core library of employment contracts, policy sets, handbooks and everyday HR templates, included as standard and regularly updated for UK employment law.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-video"></i></div>
                    <h3>Training Videos</h3>
                    <p>Add training and explainer videos to any category, so clients can watch as well as read. Perfect for how-to guidance.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-circle-question"></i></div>
                    <h3>FAQs</h3>
                    <p>Answer the questions clients ask most, organised by topic, right alongside the relevant documents.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-palette"></i></div>
                    <h3>Custom Branding</h3>
                    <p>Your logo, colours and styling throughout, creating a seamless extension of your brand.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-upload"></i></div>
                    <h3>Upload Your Own</h3>
                    <p>Add your own documents and publish custom content, so the vault reflects the way your consultancy works.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-file-import"></i></div>
                    <h3>Bulk Import</h3>
                    <p>Mass-import FAQs and videos from a spreadsheet, or add them individually. Populate your vault in minutes.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-lock"></i></div>
                    <h3>Secure Client Access</h3>
                    <p>Password-protected access for clients, with control over exactly what each client can view.</p>
                </div>
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-cogs"></i></div>
                    <h3>Simple Management</h3>
                    <p>Manage client accounts, categories, documents, videos and FAQs from a straightforward admin dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Make It Your Own Section -->
    <section class="oc-sec">
        <div class="oc-wrap oc-readable">
            <div class="oc-head">
                <div class="oc-eyebrow"><span></span>Make It Your Own</div>
                <h2>Your Content, Your Way</h2>
            </div>
            <div class="cv-import oc-mt">
                <div class="oc-ico" style="margin-bottom:0;"><i class="fas fa-file-import"></i></div>
                <div>
                    <p style="margin-top:0;">Every vault comes with the full <strong>core library</strong> included as standard. A set of <strong>optional categories</strong> covering more complex situations (for example TUPE, redundancy pooling and SOSR) can be switched on from your admin area whenever you need them. Beyond that, you are in full control of what your clients see:</p>
                    <ul class="oc-ticklist">
                        <li>Switch optional document categories on or off for your clients.</li>
                        <li>Upload your own documents and publish custom pages and content.</li>
                        <li>Add training videos and FAQs to any category or subcategory.</li>
                        <li>Mass-import FAQs and videos from a spreadsheet, or add them one at a time.</li>
                    </ul>
                    <p style="margin-bottom:0;"><a href="<?php echo SITE_URL; ?>/client-vault-documents.php" style="color:var(--pink); font-weight:600;">See the full core and optional document list &rarr;</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Revenue Opportunities Section -->
    <section class="oc-sec oc-navy">
        <div class="oc-wrap">
            <div class="oc-head">
                <div class="oc-eyebrow"><span></span>Revenue Opportunities</div>
                <h2>Flexible Revenue Options</h2>
            </div>
            <div class="oc-grid2">
                <div class="oc-cardn">
                    <div class="oc-ico"><i class="fas fa-handshake"></i></div>
                    <h3>Retainer Value-Add</h3>
                    <p>Include platform access as part of client retainer packages. Enhance perceived value and justify premium fees.</p>
                </div>
                <div class="oc-cardn">
                    <div class="oc-ico"><i class="fas fa-pound-sign"></i></div>
                    <h3>Additional Revenue Stream</h3>
                    <p>Offer platform access as a standalone subscription service. Create recurring revenue from retainer and project-based clients alike.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="oc-sec oc-cream">
        <div class="oc-wrap">
            <div class="oc-head">
                <div class="oc-eyebrow"><span></span>Pricing</div>
                <h2>Pricing</h2>
                <p>Scales with your consultancy as you grow.</p>
                <p>All prices shown exclude VAT.</p>
            </div>

            <div class="oc-price-grid g3">
                <div class="oc-price">
                    <div class="pname">Starter</div>
                    <p class="pdesc">1-5 clients</p>
                    <div class="pprice">£100 <small>per month + VAT</small></div>
                    <ul class="oc-ticklist">
                        <li>Up to 5 client accounts</li>
                        <li>Custom branding</li>
                        <li>Full document library</li>
                        <li>Regular legislative updates</li>
                        <li>Secure hosting included</li>
                        <li>Technical support</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="oc-btn oc-ghost">Get Started</a>
                </div>

                <div class="oc-price featured">
                    <div class="oc-badge">Most Popular</div>
                    <div class="pname">Growth</div>
                    <p class="pdesc">6-20 clients</p>
                    <div class="pprice">£200 <small>per month + VAT</small></div>
                    <ul class="oc-ticklist">
                        <li>Up to 20 client accounts</li>
                        <li>Custom branding</li>
                        <li>Full document library</li>
                        <li>Regular legislative updates</li>
                        <li>Secure hosting included</li>
                        <li>Technical support</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="oc-btn oc-pink">Get Started</a>
                </div>

                <div class="oc-price">
                    <div class="pname">Scale</div>
                    <p class="pdesc">21+ clients</p>
                    <div class="pprice">£300 <small>per month + VAT</small></div>
                    <ul class="oc-ticklist">
                        <li>Unlimited client accounts</li>
                        <li>Custom branding</li>
                        <li>Full document library</li>
                        <li>Regular legislative updates</li>
                        <li>Secure hosting included</li>
                        <li>Technical support</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="oc-btn oc-ghost">Get Started</a>
                </div>
            </div>

            <div class="oc-card oc-mt" style="max-width:1000px; margin-left:auto; margin-right:auto;">
                <div style="display:flex; gap:18px; align-items:flex-start;">
                    <div class="oc-ico" style="margin-bottom:0;"><i class="fas fa-cog"></i></div>
                    <div style="flex:1;">
                        <h3>One-Off Set-Up Fees</h3>
                        <p>Set-up covers custom branding with your logo and colours, platform configuration, an administrator training session and client onboarding support. Add the video and FAQ modules now or later.</p>
                        <ul class="cv-addon-list">
                            <li><span>Documents platform (set-up)</span><span class="amt">£500 + VAT</span></li>
                            <li><span>Training Videos module (set-up)</span><span class="amt">+ £125 + VAT</span></li>
                            <li><span>FAQs module (set-up)</span><span class="amt">+ £125 + VAT</span></li>
                        </ul>
                        <p style="margin-bottom:0; font-size:14px; opacity:.85;">One-off set-up fees are in addition to your chosen monthly plan above.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="oc-sec oc-cta">
        <div class="oc-wrap">
            <h2>Ready to Offer Your Clients a Professional Document Platform?</h2>
            <p>Take a look around the live demo, then get started with The Client Vault.</p>
            <div class="oc-actions" style="justify-content:center;">
                <a href="<?php echo $demoUrl; ?>" target="_blank" rel="noopener" class="oc-btn oc-pink">View the Live Demo</a>
                <a href="<?php echo SITE_URL; ?>/client-vault-signup.php" class="oc-btn oc-ghost">Sign Up Now</a>
            </div>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>
