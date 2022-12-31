<?php

define('RECEIVER','h.shalaby2022@gmail.com');

function post(string $key) {
    if (!isset($_POST[$key])) {
        echo 'Error "'.$key.'" not sended';
        exit();
    }
    return $_POST[$key];
}

$title = 'Contact Form send by ' . post('name').'"';
$headers = 'from: '.post('mail').'\n\n';
$msg   = post('message');


mail(RECEIVER,$title,$msg,$headers);
header( "location: " . $_SERVER['HTTP_REFERER'] );
