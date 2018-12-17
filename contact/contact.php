<?php

if (isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailTo = "contactform@skgiotservices.com";
$headers = "From:".$email;
$txt = "You have received and email from " .$firstname.".".$lastname.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: https://www.skgiotservices.com/");
}
