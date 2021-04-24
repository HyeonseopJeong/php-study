<?php
interface A
{
    public function foo();
}

class B implements A
{
    public $msg = 'hi!';
    public function foo() {
        echo 'foo~~' . $this->msg;
    }
}

B::foo();


