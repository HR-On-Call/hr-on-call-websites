-- =============================================
-- Client Billing Contact
-- Separate billing contact information
-- =============================================

-- Add billing contact fields
ALTER TABLE `clients`
ADD COLUMN `billing_contact_name` VARCHAR(255) NULL AFTER `contact_person`,
ADD COLUMN `billing_contact_email` VARCHAR(255) NULL AFTER `billing_contact_name`;

-- Note: If billing contact fields are empty, use the main contact person and email for billing
