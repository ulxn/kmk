<?php

$token = '5372285361:AAE621Dmdufeu6z3bRDJbHpIEMAI-2KkTn0';

$url = 'https://api.telegram.org/bot' . $token;

$telegram = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $telegram['message']['chat']['id'];
$message = $telegram['message']['text'];

if ($message == 'halo') {
    $reply = 'hello.. bang..';

    file_get_contents($url . '/sendmessage?chat_id=' . $chatId . '&text=' . $reply);
}
