<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

$host = 'localhost';   // Hostname of the MySQL server
$dbUser = 'harryf';    // Username for MySQL
$dbPass = 'secret';    // Password for User
$dbName = 'sitepoint'; // Database name

// Make connection to MySQL server
if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
    die('Could not connect to server');
}

// Select the database
if (!mysql_select_db($dbName, $dbConn)) {
    die('Could not select database');
}

echo 'Connection successful';
// ... some code here using MySQL

// Close the connection when finished
mysql_close($dbConn);
?>