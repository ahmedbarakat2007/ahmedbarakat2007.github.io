<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	session_start() ;
    if($_GET['yay'] == "Send Message")
  {
$to = "alakhtraalmodamr@gmail.com";
$subject = "Someone Sent a Message to You";
$message = $_GET['message'];
$headers =
 "From: hello@mailersend.com" .
    "\r\n" .
    "Reply-To: reply@mailersend.com" .
    "\r\n" .
    mail($to, $subject, $message, $headers);
    header("Location: main.html")
  }
}
?>
