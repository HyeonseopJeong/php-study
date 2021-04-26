<?php 

class A
{
    public $foo = 'Hello';
}

$a = new A();
var_dump($a);

$k = serialize($a);
var_dump($k);

$b = unserialize($k);
var_dump($b);

$b->foo = 'Hi';
echo $a->foo . ' ' . $b->foo;

