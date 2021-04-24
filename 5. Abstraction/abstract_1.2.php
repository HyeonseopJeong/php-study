<?php
abstract class A 
{
    abstract public function foo();
}

class B extends A 
{
    public function foo() {
        echo "foo~ B\n";
    }
}

class C extends A
{
	public function foo() {
			echo "foo~ C\n";	
	}
}

$b = new B();
bar($b);

$c = new C();
bar($c);

function bar(A $a) {
    $a->foo();
}