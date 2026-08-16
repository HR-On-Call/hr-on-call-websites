<?php
/**
 * EXAMPLE secrets file - safe to commit.
 *
 * Copy this to includes/secrets.php on the server and replace the
 * CHANGEME values with the real keys. The real file is gitignored.
 *
 * Without it the contact and signup form handlers will fatal, because they
 * require_once this file for BREVO_API_KEY.
 *
 * Note: the reCAPTCHA SITE key is public and stays in the page source. Only
 * the SECRET key belongs here.
 */
if (!defined("BREVO_API_KEY"))        define("BREVO_API_KEY", "CHANGEME_BREVO_API_KEY");
if (!defined("RECAPTCHA_SECRET_KEY")) define("RECAPTCHA_SECRET_KEY", "CHANGEME_RECAPTCHA_SECRET_KEY");
