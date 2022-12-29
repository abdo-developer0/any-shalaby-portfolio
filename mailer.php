<?php

define('RECEIVER','h.shalaby2022@gmail.com');

function post(string $key) {
    if (!isset($_POST[$key])) {
        echo 'Error "'.$key.'" not sended';
        exit();
    }
    return $_POST[$key];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' ):

    $title = 'Contact Form Messager is "'.post('name').'"';
    $headers = 'from: '.post('mail').'\n\n';
    $msg   = post('message');


    mail(RECEIVER,$title,$msg,$headers);
    header( "location: " . $_SERVER['HTTP_REFERER'] );
endif;