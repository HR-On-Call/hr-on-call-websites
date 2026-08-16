-- Portal Email Templates Migration
-- Run this SQL in phpMyAdmin on the nfc6da5_associates database

-- Create the email templates table if it doesn't exist
CREATE TABLE IF NOT EXISTS associate_email_templates (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    template_key VARCHAR(100) NOT NULL UNIQUE,
    subject VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    description VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert email templates
INSERT INTO associate_email_templates (template_key, subject, body, description) VALUES

('account_created',
'Welcome to the HR On Call Associate Portal',
'<p>Dear {{name}},</p>

<p>Welcome to the HR On Call associate network! Your account has been created on our Associate Portal.</p>

<p>The Associate Portal is where you will:</p>
<ul>
<li>Receive and respond to assignment offers</li>
<li>Track your time on hourly assignments</li>
<li>View your assignment history</li>
<li>Manage your profile</li>
</ul>

<p>To get started, please set up your password by clicking the button below:</p>

{{button}}

<p>This link will expire in 48 hours. If you need a new link, please contact Grace.</p>

<p>We look forward to working with you!</p>

<p>Best regards,<br>Grace Pariser<br>HR On Call</p>',
'Sent when a new associate account is created'),

('password_reset',
'Reset Your Password - HR On Call Associate Portal',
'<p>Dear {{name}},</p>

<p>We received a request to reset your password for the HR On Call Associate Portal.</p>

<p>Click the button below to set a new password:</p>

{{button}}

<p>This link will expire in 2 hours.</p>

<p>If you did not request a password reset, please ignore this email or contact Grace if you have concerns.</p>

<p>Best regards,<br>HR On Call</p>',
'Sent when an associate requests a password reset'),

('new_assignment',
'New Assignment Opportunity - {{client_name}}',
'<p>Dear {{name}},</p>

<p>You have a new assignment opportunity available on the Associate Portal.</p>

<p><strong>Client:</strong> {{client_name}}</p>
<p><strong>Fee Type:</strong> {{fee_type}}</p>
<p><strong>Rate:</strong> {{rate}}</p>

<p><strong>Scope of Work:</strong></p>
<p>{{scope}}</p>

<p>Please log in to the portal to view the full details and respond:</p>

{{button}}

<p>Best regards,<br>Grace Pariser<br>HR On Call</p>',
'Sent when a new assignment is offered to an associate'),

('assignment_accepted',
'Assignment Confirmed - {{client_name}}',
'<p>Dear {{name}},</p>

<p>Great news! Your acceptance of the {{client_name}} assignment has been confirmed.</p>

<p><strong>Client:</strong> {{client_name}}</p>
<p><strong>Fee Type:</strong> {{fee_type}}</p>
<p><strong>Rate:</strong> {{rate}}</p>

<p>You can view the full assignment details and start tracking time in the portal:</p>

{{button}}

<p>If you have any questions, please don''t hesitate to get in touch.</p>

<p>Best regards,<br>Grace Pariser<br>HR On Call</p>',
'Sent when an assignment acceptance is confirmed'),

('proposal_response',
'Update on Your Proposal - {{client_name}}',
'<p>Dear {{name}},</p>

<p>There has been an update regarding your proposal for the {{client_name}} assignment.</p>

<p>{{message}}</p>

<p>Please log in to the portal to view the details and respond:</p>

{{button}}

<p>Best regards,<br>Grace Pariser<br>HR On Call</p>',
'Sent when there is a response to an associate proposal'),

('assignment_completed',
'Assignment Completed - {{client_name}}',
'<p>Dear {{name}},</p>

<p>The {{client_name}} assignment has been marked as completed.</p>

<p><strong>Client:</strong> {{client_name}}</p>
<p><strong>Total Time:</strong> {{total_hours}} hours</p>

<p>Thank you for your excellent work on this assignment.</p>

<p>You can view the assignment summary and export your time entries from the portal:</p>

{{button}}

<p>Best regards,<br>Grace Pariser<br>HR On Call</p>',
'Sent when an assignment is marked as completed'),

('admin_assignment_response',
'Associate Response - {{associate_name}} - {{client_name}}',
'<p>An associate has responded to an assignment offer.</p>

<p><strong>Associate:</strong> {{associate_name}}</p>
<p><strong>Client:</strong> {{client_name}}</p>
<p><strong>Response:</strong> {{response_type}}</p>

{{details}}

<p>View and manage in the admin portal:</p>

{{button}}',
'Sent to admin when an associate responds to an assignment')

ON DUPLICATE KEY UPDATE
    subject = VALUES(subject),
    body = VALUES(body),
    description = VALUES(description);
