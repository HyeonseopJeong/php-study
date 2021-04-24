<?php
abstract class A 
{
    abstract public function foo();
}

class B extends A 
{
    public function foo() {
        echo 'foo~';
    }
}

$b = new B();
bar($b);

function bar(A $a) {
    $a->foo();
}