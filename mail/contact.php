<?php
if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || empty($_POST['mail'])) {
  http_response_code(500);
  exit();
}
$to = "sofianeou93@gmail.com"; // Change this email to your own email address
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = (($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

$headers = 'From: "' . $email . '"'       . "\r\n" .
  'Reply-To: "' . $email . '"' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
if (!mail($to, $subject, $message, $headers)) {
  http_response_code(500);
}
