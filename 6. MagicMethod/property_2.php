<?php 

class A
{
    private $foo;

    public function __unset($name) {
        echo 'unset';
        return isset($this->$name);
    }
}

$a = new A();
// unset($a);
// unset($a->message);
