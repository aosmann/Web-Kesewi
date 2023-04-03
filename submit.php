<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // send email to appropriate address
  $to = "osman@kesewi.com";
  $subject = "New message from contact form";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "yess";
    header('Location: index.html');
    exit;
  } else {
    echo "Your submission has an error!";
  }
}
?>
