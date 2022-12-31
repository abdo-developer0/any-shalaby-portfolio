<?php

function url(string $uri = '')
{
    $protocol = (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on')? 'https': 'http';

    $host     = $_SERVER['HTTP_HOST'];

    $uri      = empty($uri)? filter_var( explode('?', $_SERVER['REQUEST_URI'])[0], FILTER_SANITIZE_URL): $uri;

    return "$protocol://$host/" . ltrim($uri, '/');
}