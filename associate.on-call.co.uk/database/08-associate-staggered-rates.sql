-- =============================================
-- Add Staggered Rates to Associates
-- Allows setting default rates per associate for admin, advisory, and specialist work
-- =============================================

-- Add rate columns to associates table
ALTER TABLE `associates`
ADD COLUMN `admin_rate` DECIMAL(10,2) NULL,
ADD COLUMN `advisory_rate` DECIMAL(10,2) NULL,
ADD COLUMN `specialist_rate` DECIMAL(10,2) NULL;

-- Note: NULL means not set, which is fine for existing associates
-- Rates can be set individually or fall back to the main 'rate' field if needed
