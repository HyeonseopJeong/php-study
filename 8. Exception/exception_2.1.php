<?php

set_error_handler(function ($errno, $errstr) {
    echo $errno . ' ' . $errstr . "\n";
});

echo $foo;
10/0;