<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message']."\n\nName: ".$name."\nMail: ".$mail;

$mailHeader = "From:".$name."<".$mail.">";

// $recipient = "frodion@outlook.de";
$recipient = "info@dennis-schmalstieg.de";

mail($recipient, "Request", $message, $mailHeader)
or die("Error!!!");

include 'thank.html';
?>