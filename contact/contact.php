<?php

if (isset($_POST['submit'])){
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailTo = "contactform@skgiotservices.com";
$headers = "From:".$firstname." ".$lastname;
$headers = "From:".$email;
$txt = "You have received and email from " .$firstname." ".$lastname.".\n\n".$message;


mail($email, $subject, $txt, $headers);
header("Location: index.phpmailsend");
}
