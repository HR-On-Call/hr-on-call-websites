-- =============================================
-- Add Staggered Rates to Assignments
-- Allows per-assignment rates for admin, advisory, and specialist work
-- =============================================

-- Add associate rate columns (what we pay the associate)
ALTER TABLE `assignments`
ADD COLUMN `associate_admin_rate` DECIMAL(10,2) NULL,
ADD COLUMN `associate_advisory_rate` DECIMAL(10,2) NULL,
ADD COLUMN `associate_specialist_rate` DECIMAL(10,2) NULL;

-- Add client rate columns (what we bill the client)
ALTER TABLE `assignments`
ADD COLUMN `client_admin_rate` DECIMAL(10,2) NULL,
ADD COLUMN `client_advisory_rate` DECIMAL(10,2) NULL,
ADD COLUMN `client_specialist_rate` DECIMAL(10,2) NULL;

-- Note: The existing hourly_rate and client_hourly_rate fields can remain for backward compatibility
-- or be used as defaults when specific rates aren't set
