<?php 

try {
    new Foo();
} catch(Error $e) {
    echo $e->getMessage();
}