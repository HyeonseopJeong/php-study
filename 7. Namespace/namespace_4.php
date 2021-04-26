<?php
namespace N1
{
    class A 
    {
    }

    const MESSAGE = "HI";

    function foo() {
        return 'FOO';
    }
}

namespace {
    use N1\A;
    use const N1\MESSAGE;
    use function N1\foo;

    echo MESSAGE;
    echo "\n";
    echo foo();
}