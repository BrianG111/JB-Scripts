<?php
class Hello {
    function getMessage()
    {
        return 'Hello World!';
    }
}

class Goodbye extenda Hello {
    function getMessage()
    {
        return 'Goodbye World!'
    }
}

$hello = &new Hello();
echo $hello->getMessage() . '<br />';

$goodbye = &new Goodbye();
echo $goodbye->getMessage() . '<br />';
?>