<?php 

set_error_handler(function ($errno, $errstr) {
    echo $errno . ' ' . $errstr . "\n";
});

new Foo();