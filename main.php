<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$mailHeader = "From:".$name."<".$mail.">\r\n";

$recipient = "frodion@outlook.de";

mail($recipient, "Request", $message, $mailHeader)
or die("Error!!!");

include 'thank.html';
?>