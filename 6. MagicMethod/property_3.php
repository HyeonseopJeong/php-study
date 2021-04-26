<?php 

class A
{
    private $foo;

    public function __set($name, $value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
}

$a = new A();
$a->foo = 'aaa';
echo $a->foo;

