<?php

function route(string $path) {

    $route = parse_url($_SERVER['REQUEST_URI'])['path'];

    return $path == $route;
}

function url(string $path) {

    $protcol  = (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on')? 'https' : 'http';

    $host = $_SERVER['HTTP_HOST'];

    $path = ltrim($path, '/');

    return "$protcol://$host/$path";
}

function html_render(string $file, array $data =[]) {
    
    if (file_exists($file)) {

        $content = file_get_contents($file);
        
        $content = preg_replace('/\{\{(.*)\}\}/','<?php echo $1 ?>', $content);
        $content = preg_replace('/@([a-zA-Z]+\(.*\))/','<?php echo $1 ?>', $content);


        foreach($data as $variable => $value ) $$variable = $value;
        
        eval('?>'. $content);
    }
    else {
        echo "html_render(filepath): file '$file' is not exists.";
    }
    ob_flush();
}