<?php
interface A
{
    public function foo();
}

class B implements A
{
    public function foo() {
        echo 'foo~~';
    }
}

B::foo();


