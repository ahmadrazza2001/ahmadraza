<?php

if (isset($_POST['email']) && $_POST['email'] != "") {


  $userName = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "mr.ahmedraza8@gmail.com";
  $body = "";

  $body .= "From: " . $userName . "\r\n";
  $body .= "Email: " . $email . "\r\n";
  $body .= "Message: " . $message . "\r\n";

  mail($to, $subject, $body);

  $message_sent = true;

}

?>