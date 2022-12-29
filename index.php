<?php

/**
 * require helpers
 * for get usful functions
 */

require_once __DIR__ . '/helpers.php';

/**
 * start output buffering for errors
 */

ob_start();

if (route('/') or route('/home')) {

  $visitors = require_once(__DIR__ . '/__on_visit.php');
  
  html_render('home.html', ['visitors' => $visitors]);
  
  http_response_code(200);
  
} else {

  html_render('404.html');

  http_response_code(404);

}
