<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//testing with real email
//$email_from = 'info@mirandastrucking.com';
$email_from = 'javiermiranda2601@gmail.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'mirandastrucking@gmail.com';

$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>

#skip to 12:36 of part 4 of video to understand
