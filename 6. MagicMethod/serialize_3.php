<?php 

class A implements Serializable
{
    public $foo;
    public $bar;
    public $foobar;

    public function __construct() {
        $this->foo = 'foo';
        $this->bar = 'bar';
        $this->foobar = 'foobar';
    }

    public function serialize() {
        return serialize([$this->bar, $this->foobar]);
    }

    public function unserialize($data) {
        list(
            $this->foo,
            $this->bar
        ) = unserialize($data);
    }
}

$a = new A();
var_dump($a);

$serial = serialize($a);

$b = unserialize($serial);
var_dump($b);
