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