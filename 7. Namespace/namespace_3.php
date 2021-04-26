<?php
namespace N1
{
    class A 
    {
        public function foo() {
            echo __METHOD__ . "\n";
        }
    }
}

namespace N2
{
    class A
    {
        public function foo() {
            echo __METHOD__ . "\n";
        }
    }
}

namespace 
{
    use N1\A as A1;
    use N2\A as A2;
}