<?php
trait T1 
{
    protected function foo() {
        echo __TRAIT__;
    }
}

trait T2
{
    protected function foo() {
        echo __TRAIT__;
    }
}

class A 
{
    use T1, T2 {
        T1::foo insteadof T2;
    }
    public function foobar() {
        $this->foo(); 
    }
}

$a = new A();
$a->foobar();
