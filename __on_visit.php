<?php

/**
 * initialize $count = 0
 * for if no visitors show 0 visitors
 */
$count = '0';

/**
 * check if visit_count file exists.
 * to eval the value of file.
 */

if (file_exists('visit_count')) {
    $count = eval( '?><?php return '. file_get_contents('visit_count') . ' ?>' );
}

/**
 * string $visitor = value
 * this for set cookie
 */

$visitor = 'visitor';

/**
 * handlling visit for one time at day
 * check is $visited.
 */

if (!isset($_COOKIE[$visitor])) {

    $count += 1; // increment vist count.

    file_put_contents('visit_count', $count );

    setcookie($visitor, true, time() + 86400, "/");
}


return $count;