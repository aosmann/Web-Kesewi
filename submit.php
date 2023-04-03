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
    echo "<script>alert('Thank you for contacting us!');</script>";
  } else {
    echo "<script>alert('There was an error sending your message. Please try again later.');</script>";
  }
}
?>
