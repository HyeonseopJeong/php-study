<?php 

class A
{
    private $foo;

    public function __isset($name) {
        echo 'isset';
        return isset($this->$name);
    }
}

$a = new A();
isset($a);
isset($a->message);
