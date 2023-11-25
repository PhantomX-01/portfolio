<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['name'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "krazyencounter01@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">

    <title>Psychic Cyber - A Web Developer</title>
</head>

<body>
    <div class="div">
        <h2>Thank You for contacting us. We will get back to you as soon as possible!</h2>
        <p class="back">Go back to the <a href="index.html">HomePage</a>.</p>
    </div>
</body>

</html>';

?>