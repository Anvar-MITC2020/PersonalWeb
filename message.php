<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number']
$message = $_POST['message'];
$formcontent="From: $name \n Number: $number \n Message: $message";
$recipient = "freefreelanceruzb@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
