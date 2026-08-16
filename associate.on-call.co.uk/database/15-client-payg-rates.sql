-- =============================================
-- Client Pay-As-You-Go Rates
-- Hourly rates for clients without retainer packages
-- =============================================

-- Add rate fields for pay-as-you-go clients
ALTER TABLE `clients`
ADD COLUMN `admin_rate` DECIMAL(10,2) NULL DEFAULT NULL AFTER `billing_contact_email`,
ADD COLUMN `advisory_rate` DECIMAL(10,2) NULL DEFAULT NULL AFTER `admin_rate`,
ADD COLUMN `specialist_rate` DECIMAL(10,2) NULL DEFAULT NULL AFTER `advisory_rate`;

-- Note: These rates are used for clients with retainer_type = 'none'
-- If rates are NULL, system will fall back to default rates
