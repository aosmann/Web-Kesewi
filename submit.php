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
    echo '<script>alert("Message sent successfully!");</script>';
  } else {
    echo '<script>alert("Error sending message. Please try again.");</script>';
  }
}
?>
