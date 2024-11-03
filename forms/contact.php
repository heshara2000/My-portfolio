<?php
/**
 * php-email-form
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = "hesharadananjanee@gmail.com";

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new $php-email-form();
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'] ?? '';
$contact->from_email = $_POST['email'] ?? '';
$contact->subject = $_POST['subject'] ?? '';

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

$contact->smtp = array(
    host => smtp.gmail.com,
    username => hesharadananjanee@gmail.com, // <-- Update with your Gmail address
    password => '12344', // <-- Update with your Gmail password
    port=> 587,
    encryption => 'tls',
    auth => true // Add this line to enable SMTP authentication
);

$contact->add_message($_POST['name'] ?? '', 'From');
$contact->add_message($_POST['email'] ?? '', 'Email');
$contact->add_message($_POST['message'] ?? '', 'Message', 10);

if ($contact->send()) {
    echo "Message sent successfully";
} else {
    echo "Message could not be sent";
}
?>
