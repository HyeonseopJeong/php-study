<?php 

class MyException extends Exception
{
}

try {
    throw new MyException('Message');
} catch (MyException $e) {
    echo 'This is MyException';
} catch(Exception $e) {
    echo 'This is Exception';
}