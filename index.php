<?php

if (strstr($_SERVER['HTTP_USER_AGENT'], "curl/")) {
    echo 'HTTP_CLIENT_IP: ' . $_SERVER['HTTP_CLIENT_IP'] . "\n";
    echo 'HTTP_X_FORWARDED_FOR: ' . $_SERVER['HTTP_X_FORWARDED_FOR'] . "\n";
    echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . "\n";
} else {
    echo '<html><head></head><body>';
    echo 'HTTP_CLIENT_IP: ' . $_SERVER['HTTP_CLIENT_IP'] . "<br>";
    echo 'HTTP_X_FORWARDED_FOR: ' . $_SERVER['HTTP_X_FORWARDED_FOR'] . "<br>";
    echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . "<br>";
    echo '</html>';
}

?>

