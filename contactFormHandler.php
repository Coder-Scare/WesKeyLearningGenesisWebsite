<?php
header("Location: sent.html", true, 303);
exit;
$name = $_POST['firstname'];
$lname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$message = $_POST['subject'];

$email_from = 'litzone.net'; /* Change once domain bought */

$email_subject = "New Tuition inquiry";

$email_body = "User Name: $name.\n".
              "User Last Name: $lname.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "wkeylearning@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers); 

?>
