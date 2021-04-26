<?php 

class A
{
    public $foo;
    public $bar;
    public $foobar;

    public function __construct() {
        $this->foo = 'foo';
        $this->bar = 'bar';
        $this->foobar = 'foobar';
    }

    public function __sleep() {
        return ['bar'];
    }

    public function __wakeup() {
        $this->foobar = 'wakeup!';
    }
}

$a = new A();
var_dump($a);

$serial = serialize($a);

$b = unserialize($serial);
var_dump($b);
