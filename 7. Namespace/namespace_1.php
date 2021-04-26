<?
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
    use N1\A ; //use N2\A
    $a = new A();
    $a->foo();
}