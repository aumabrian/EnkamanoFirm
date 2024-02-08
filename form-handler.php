<?php

$name = $_POST['name'];
$client_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'otiibrian1@gmail.cm';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $client_email.\n".
               "subject: $subject.\n".
               "User Message: $message.\n";
               
$to = 'otiibrian1@gmil.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $client_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>