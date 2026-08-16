-- =============================================
-- Custom Retainer Packages
-- Allows manual configuration of retainer packages with custom rates and add-ons
-- =============================================

-- Add custom retainer fields to clients table
ALTER TABLE `clients`
ADD COLUMN `has_hr_vault` TINYINT(1) DEFAULT 0 AFTER `retainer_type`,
ADD COLUMN `has_easy_audit` TINYINT(1) DEFAULT 0 AFTER `has_hr_vault`,
ADD COLUMN `discount_amount` DECIMAL(10,2) NULL AFTER `has_easy_audit`,
ADD COLUMN `custom_monthly_fee` DECIMAL(10,2) NULL AFTER `discount_amount`,
ADD COLUMN `custom_included_hours` DECIMAL(5,2) NULL AFTER `custom_monthly_fee`,
ADD COLUMN `custom_max_banked` DECIMAL(5,2) NULL AFTER `custom_included_hours`,
ADD COLUMN `custom_admin_rate` DECIMAL(10,2) NULL AFTER `custom_max_banked`,
ADD COLUMN `custom_advisory_rate` DECIMAL(10,2) NULL AFTER `custom_admin_rate`,
ADD COLUMN `custom_specialist_rate` DECIMAL(10,2) NULL AFTER `custom_advisory_rate`;

-- Note: These custom fields override the standard retainer_type settings when set
-- If custom_monthly_fee is set, the retainer is considered a custom package
