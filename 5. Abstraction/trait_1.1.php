<?php
trait T1 
{
    private $t1 = 't1~';
    protected function foo() {
        echo $this->t1;
    }
}

trait T2
{
    private $t2 = 't2~';
    protected function bar() {
        echo $this->t2;
    }
}

class A 
{
    use T1, T2;
    public function foobar() {
        $this->foo(); 
        $this->bar();
    }
}

$a = new A();
$a->foobar();
