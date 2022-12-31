<?php


require_once __DIR__ . '/vendor/autoload.php';

$website = new URIRouter(__DIR__);

$GLOBALS['visitors_counter'] = require_once(__DIR__ . '/php/__on_visit.php');

$website->page('get', 'index', function(URIRouter $router) {
    $router->loadFile('/templates/home.php');
});

$website->page('get', 'login', function(URIRouter $router) {
    $router->loadFile('/templates/login.php');
});

$website->page('post', 'sendEmail', function(URIRouter $router) {
    $router->loadFile('/php/_send_mail.php');
});


$website->run();