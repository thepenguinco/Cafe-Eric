<?php
$name = "Eric Li";
$email_address = "li.eric00@gmail.com";
$phone = "123-456-7890";
$message = "Today";

// Create the email and send the message
$to = 'li.eric00@gmail.com';
$email_subject = "Reservation Form:  $name";
$email_body = "You have received a new reservation from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@cafe-eric.tk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
