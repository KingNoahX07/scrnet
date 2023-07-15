<?php
$first_name = $_POST["First Name"];
$last_name =  $_POST["Last Name"];
$email = $_POST["Email"];
$phone = $_POST["Phone Number"];
$birthday = $_POST["Date of Birth"];
$state = $_POST["State"];
$city = $_POST["City"];
$zip = $_POST["Zip"];
$time = $_POST["Available Date & Time"];
$interests = $_POST["Volunteer Work Interests"];
$questions = $_POST["Questions"];

$email_subject = "New Volunteer Application";

$email_body = $first_name;

$to = "kingnoahx07@gmail.com";

mail($to, $email_subject, $email_body);
header("Location: thankYou.html");
?>