<?php 
namespace N
{
    function var_dump($a) {
        echo __NAMESPACE__ . "\n";
    }

    var_dump('aa');
    \var_dump('aa');
}