<?php
//Include the MySQL class
require_once 'Database/MySQL.php';

$host = 'localhost';
$dbUser = 'harryf';
$dbPass = 'secret';
$dbName = 'sitepoint';

// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);
?>