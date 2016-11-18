<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

// Include the MySQL class
require_once 'SPLIB/Database/MySQL.php';

$host = 'localhost';    // Hostname of MySQL Server
$dbUser = 'harryf';     // Username for MySQL
$dbPass = 'secret';     // Password for user
$dbName = 'sitepoint';  // Database name

// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);
?>