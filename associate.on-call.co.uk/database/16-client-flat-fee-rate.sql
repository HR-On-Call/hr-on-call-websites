-- =============================================
-- Client Flat Fee Rate
-- Add flat fee rate for time entries
-- =============================================

-- Add flat_fee_rate column
ALTER TABLE `clients`
ADD COLUMN `flat_fee_rate` DECIMAL(10,2) NULL DEFAULT NULL AFTER `specialist_rate`;

-- Note: Used for time entries marked as flat_fee rate type
