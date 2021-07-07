<?php

$mail = "denmak1983@mail.ru";
$from = $_POST['email']; // trim убирает лишние пробелы

$message = htmlspecialchars($_POST['message']);

$headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if(mail($mail, $message, $headers)) {
    echo "Email sent!";
} else {
    echo "Sending error!";
}