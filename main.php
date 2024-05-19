<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$mailHeader = "From:".$name."<".$mail.">\r\n";

$recipient = "frodion@outlook.de";

mail($recipient, "Request", $message, $mailHeader)
or die("Error!!!");

echo `
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank you</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Thank You</h1>
      <br /><br />
      <p>Thank you for your message</p>
      <p>we will contact you as soon as possible</p>
      <br /><br />
      <a href="index.html" class="btn-01">back to HOME</a>
    </div>
  </body>
</html>

`;

?>