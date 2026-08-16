<?php
// Process Referrer Signup Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize form data
    $first_name = htmlspecialchars($_POST['first_name'] ?? '');
    $last_name = htmlspecialchars($_POST['last_name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $company = htmlspecialchars($_POST['company'] ?? '');
    $location = htmlspecialchars($_POST['location'] ?? '');
    $client_size = htmlspecialchars($_POST['client_size'] ?? 'Not specified');
    $referral_frequency = htmlspecialchars($_POST['referral_frequency'] ?? 'Not specified');
    $additional_info = htmlspecialchars($_POST['additional_info'] ?? 'None provided');
    $terms_accepted = isset($_POST['terms_accepted']) ? 'Yes' : 'No';
    $marketing_emails = isset($_POST['marketing_emails']) ? 'Yes' : 'No';
    
    // Email configuration
    $to = "grace@gp-hr.co.uk";
    $subject = "New Referrer Signup - " . $first_name . " " . $last_name;
    
    // Create email message
    $message = "New Referrer Signup Request\n";
    $message .= "============================\n\n";
    $message .= "CONTACT INFORMATION:\n";
    $message .= "Name: " . $first_name . " " . $last_name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Company/Practice: " . $company . "\n";
    $message .= "Location: " . $location . "\n\n";
    
    $message .= "REFERRAL DETAILS:\n";
    $message .= "Typical Client Size: " . $client_size . "\n";
    $message .= "Expected Referral Frequency: " . $referral_frequency . "\n\n";
    
    $message .= "ADDITIONAL INFORMATION:\n";
    $message .= $additional_info . "\n\n";
    
    $message .= "PREFERENCES:\n";
    $message .= "Terms Accepted: " . $terms_accepted . "\n";
    $message .= "Marketing Emails: " . $marketing_emails . "\n\n";
    
    $message .= "============================\n";
    $message .= "Submitted: " . date('d/m/Y H:i:s') . "\n";
    $message .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email
    $mail_sent = mail($to, $subject, $message, $headers);
    
    // Send confirmation email to the referrer
    if ($mail_sent) {
        $confirm_subject = "Thank you for joining our referrer network";
        $confirm_message = "Dear " . $first_name . ",\n\n";
        $confirm_message .= "Thank you for your interest in joining our referrer network.\n\n";
        $confirm_message .= "We've received your application and will be in touch shortly to discuss how we can work together.\n\n";
        $confirm_message .= "In the meantime, if you have any questions, please don't hesitate to contact us.\n\n";
        $confirm_message .= "Best regards,\n";
        $confirm_message .= "Grace Pariser\n";
        $confirm_message .= "Grace Pariser Human Resources\n";
        $confirm_message .= "01752 425526\n";
        $confirm_message .= "grace@gp-hr.co.uk\n";
        
        $confirm_headers = "From: grace@gp-hr.co.uk\r\n";
        $confirm_headers .= "Reply-To: grace@gp-hr.co.uk\r\n";
        $confirm_headers .= "X-Mailer: PHP/" . phpversion();
        
        mail($email, $confirm_subject, $confirm_message, $confirm_headers);
    }
    
    // Redirect to thank you page or show success message
    if ($mail_sent) {
        // Redirect to accountants page with success parameter
        header("Location: accountants.php?signup=success");
        exit();
    } else {
        // Redirect with error parameter
        header("Location: accountants.php?signup=error");
        exit();
    }
    
} else {
    // If not POST request, redirect to accountants page
    header("Location: accountants.php");
    exit();
}
?>