<?php

$token = "bot601_________92:AAF________________Bg";
$data = [
    "text" => 'pesannya disini',
    'chat_id' => '796251625',
];

$a = file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
