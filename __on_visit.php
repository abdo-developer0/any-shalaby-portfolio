<?php

$count = '0';
if (file_exists('visit_count')) {
    $count = eval( '?><?php return '. file_get_contents('visit_count') . ' ?>' );
}


$count++;

file_put_contents('visit_count', $count );

return $count;