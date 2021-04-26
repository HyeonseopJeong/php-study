<?php 

set_error_handler(function ($errno, $errstr) {
    throw new ErrorException($errstr, $errno);
});

set_exception_handler(function (Exception $e) {
    echo 'caughted exception message: ' . $e->getMessage();
});

echo $foo;

