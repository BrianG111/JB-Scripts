<?php
// A global variable
$myVariable = 'Going Global';

// A function declared in the global scope
function myFunction()
{
    // A variable in function scope
    $myVariable = 'Very functional';
}

// A class declared in the global scope
class MyClass{
    // A variable declared in the class scope
    var $myVariable = 'A class act';

    // A function declared in the class scope
    function myFunction()
    {
      // A variable in the function (method) scope
      $myVariable = 'Methodical';
    }
}
?>
