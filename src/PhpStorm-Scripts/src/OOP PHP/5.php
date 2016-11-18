

<?php
// This works fine
echo '<br />Requiring Once: ';
require_once 'include_me.php';

// This works fine as well
echo '<br />Including: ';
include 'include_me.php ';
// Nothing happens as file is already included
echo '<br />Including Once: ';
include_once 'include_me.php';

// This is fine
echo ' <br />Requiring: ';
require 'include_me.php';

// Again nothing happens - the file is included
echo '<br />Requiring Once again: ';
require_once 'include_me.php';

// Produces warning message as the file doesn't exist
echo '<br />Include the wrong file:';
include 'include_wrong.php';

// Produces a fatal error and script execution halts
echo '<br />Requiring the wrong file: ';
require 'include_wrong.php';

// This will never be executed as we have a fatal error
echo '<br />Including again: ';
include 'include_me.php';
?>
