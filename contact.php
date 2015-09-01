<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'krista.lynn.jackson@gmail.com'
$subject = 'Contact form message from portfolio page'

mail ($to, $subject, $message, "From: " . $name);
echo "Your message has been sent.";

?>
