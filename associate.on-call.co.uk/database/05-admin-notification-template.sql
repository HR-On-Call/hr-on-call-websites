INSERT INTO associate_email_templates (template_key, name, subject, body, description, created_at, updated_at)
VALUES (
    'agreement_signed_admin',
    'Admin: Agreement Signed',
    'Agreement Signed: {{applicant_name}}',
    '<p>An associate has signed their agreement.</p>

<p><strong>Name:</strong> {{applicant_name}}<br>
<strong>Email:</strong> {{applicant_email}}<br>
<strong>Signed at:</strong> {{signed_at}}</p>

<p><a href="{{admin_url}}">View in Admin</a></p>',
    'Admin notification when associate signs agreement',
    NOW(),
    NOW()
);