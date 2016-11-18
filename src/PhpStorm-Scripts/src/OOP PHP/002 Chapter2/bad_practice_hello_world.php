<?php
class Bar {
}

class Foo {
    // Return by reference
    function &getBar()
    {
        return new Bar();
    }
}

// Instantiate Foo
$foo = &new Foo();

// Get an instance of Bar from Foo
$bar = &$foo->getBar();
function display($message) {
    echo $message;
}

$myMessage = 'Hello World';

// Call time pass by reference - bad practice!
display(&$myMessage);
?>