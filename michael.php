<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'bispe.michael@student.capsu.edu.ph';
$email_subject = "New form Submission";
$email_body = "User name: $name. \n".
                "User Email: $visitor_email. \n".
                    "User Message: $message. \n";
$to = "michaelbispe2419@gmail.com";
$headers= "From: $email_from \r \n";
$headers= "Reply to: $visitor_email \r \n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>