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

// Accept by reference - good practice!
function display(&$message)
{
    echo $message;
}

$myMessage = 'Hello World';

display($myMessage);
?>