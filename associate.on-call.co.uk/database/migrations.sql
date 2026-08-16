-- =============================================
-- HR On Call Associate Portal - Database Migrations
-- Run these SQL statements in phpMyAdmin
-- =============================================

-- ---------------------------------------------
-- 1. Add VAT Registered column to applicants
-- ---------------------------------------------
ALTER TABLE applicants
ADD COLUMN vat_registered TINYINT(1) DEFAULT 0 AFTER referral_source;


-- ---------------------------------------------
-- 2. Add Profile columns to applicants
-- ---------------------------------------------
ALTER TABLE applicants
ADD COLUMN profile_token VARCHAR(64) NULL AFTER agreement_signed_at,
ADD COLUMN profile_display_name VARCHAR(255) NULL AFTER profile_token,
ADD COLUMN profile_specialisms VARCHAR(500) NULL AFTER profile_display_name,
ADD COLUMN profile_years_experience VARCHAR(100) NULL AFTER profile_specialisms,
ADD COLUMN profile_background TEXT NULL AFTER profile_years_experience,
ADD COLUMN profile_enjoys TEXT NULL AFTER profile_background,
ADD COLUMN profile_location VARCHAR(255) NULL AFTER profile_enjoys,
ADD COLUMN profile_headshot VARCHAR(500) NULL AFTER profile_location,
ADD COLUMN profile_submitted_at DATETIME NULL AFTER profile_headshot;


-- ---------------------------------------------
-- 3. Fix last_login column in associates table
-- (Change from INT to DATETIME if needed)
-- ---------------------------------------------
ALTER TABLE associates
MODIFY COLUMN last_login DATETIME NULL;


-- ---------------------------------------------
-- 4. Update agreement_signed email template
-- ---------------------------------------------
UPDATE associate_email_templates
SET body = '<p>Dear {{first_name}},</p>

<p>Thank you for signing your Associate Agreement with HR On Call Ltd.</p>

<p>Your signed agreement is attached to this email for your records.</p>

<h3>Next Steps</h3>

<p><strong>1. Set Up Your Portal Account</strong></p>
<p>You will receive a separate email shortly with instructions to set up your password for the Associate Portal, where you''ll be able to view and respond to assignment opportunities.</p>

<p><strong>2. Complete Your Profile</strong></p>
<p>Please take a few minutes to complete your profile for our website. This helps us showcase your expertise to potential clients.</p>

<p style="text-align: center; margin: 30px 0;">
<a href="{{profile_url}}" style="background-color: #DB2777; color: #ffffff; padding: 14px 28px; text-decoration: none; border-radius: 6px; font-weight: 600; display: inline-block;">Complete Your Profile</a>
</p>

<p>If you have any questions, please don''t hesitate to get in touch.</p>

<p>Best regards,<br>
Grace Pariser<br>
HR On Call Ltd</p>'
WHERE slug = 'agreement_signed';


-- ---------------------------------------------
-- 5. Insert agreement_signed_admin template
-- ---------------------------------------------
INSERT INTO associate_email_templates (slug, name, subject, body, created_at)
VALUES (
    'agreement_signed_admin',
    'Admin: Agreement Signed Notification',
    'Agreement Signed: {{applicant_name}}',
    '<p>An associate has signed their agreement.</p>

<p><strong>Name:</strong> {{applicant_name}}<br>
<strong>Email:</strong> {{applicant_email}}<br>
<strong>Signed at:</strong> {{signed_at}}</p>

<p><a href="{{admin_url}}">View in Admin</a></p>',
    NOW()
);


-- =============================================
-- END OF MIGRATIONS
-- =============================================
