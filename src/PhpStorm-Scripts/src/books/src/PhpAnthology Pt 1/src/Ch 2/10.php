<?php
class Hello {
    function getMessage()
    {
        return 'Hello World!';
    }
}

class Goodbye extends Hello {
    function getMessage()
    {
        $parentmsg = parent::getMessage();
        return $parentmsg . '<br />Goodbye World!';
    }
}

$goodbye = &new Goodbye();
echo $goodbye->getMessage() . '<br />';
?>