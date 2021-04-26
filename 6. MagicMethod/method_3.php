<?php 

class A
{
    public function __invoke(...$args) {
        foreach($args as $a)
            echo $a . ' ';
    }
}

$a = new A();
$a('foo', 'bar');
