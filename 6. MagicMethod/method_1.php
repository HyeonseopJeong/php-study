<?php 

class A
{
    public function __call($name, $args) {
        echo "$name $args[0]\n";
    }
}

$a = new A();
$a->foo('hihihi');