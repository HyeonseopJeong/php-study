<?php
class A 
{
    private static $instance;
    
    private function __construct() {
    }

    public static function create() {
        return self::$instance ? : self::$instance = new self();
    }
}

$a1 = A::create();
$a2 = A::create();

if($a1 === $a2)
    echo "same!";