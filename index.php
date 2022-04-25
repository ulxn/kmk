<?php

$token = '5353507266:AAFWSvRlIgIuNR_D8KtBgKT_UHytXH1l-jQ';

$url = 'https://api.telegram.org/bot' . $token;

$telegram = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $telegram['message']['chat']['id'];
$message = $telegram['message']['text'];

if ($message == 'halo') {
    $reply = 'hello.. bang..';

    file_get_contents($url . '/sendmessage?chat_id=' . $chatId . '&text=' . $reply);
}
