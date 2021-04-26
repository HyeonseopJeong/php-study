<?php 

try {
    throw new Exception('Message');
} catch(Exception $e) {
    echo $e->getMessage();
} finally {
    echo ' finally';
}