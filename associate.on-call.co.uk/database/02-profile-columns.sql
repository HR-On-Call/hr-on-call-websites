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