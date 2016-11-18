<?php
/* Note: This scripts will only work with PHP 4.3.0 or  later */

// Read a PHP scripts as a string
$script = file_get_contents('ParseError.php');

// Fetch the tokens into an array
$tokens = token_get_all($script);

// Display
echo '<pre>';
print_r($tokens);
echo '</pre>';
?>
