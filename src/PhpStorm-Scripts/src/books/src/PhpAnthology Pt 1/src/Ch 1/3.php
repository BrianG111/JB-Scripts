<?php
/* Note: This script will only work with PHP 4.3.0 or later */

// Read a PHP script as a string
$scripts = file_get_contents('2.php');

// fetch the tokens into an array
$tokens = token_get_all($scripts);

// Display
echo '<pre>';
print_r($tokens);
echo '</pre>';
?>