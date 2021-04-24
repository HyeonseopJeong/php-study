<?php
trait T1 
{
    private $t1 = 't1~';
    protected function foo() {
        echo $this->t2;
    }
}

trait T2
{
    private $t2 = 't2~';
    protected function foo() {
        echo $this->t1;
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
