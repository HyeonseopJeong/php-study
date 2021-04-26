<?php 

class A
{
    public static function __callStatic($name, $args) {
        echo "$name $args[0]\n";
    }
}

A::foo('bar');