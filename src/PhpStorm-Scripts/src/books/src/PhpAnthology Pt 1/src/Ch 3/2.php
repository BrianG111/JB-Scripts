<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

function &connectToDb($host, $dbUser, $dbPass, $dbName)
{
    // Nake connection to MySQL server
    if (!$dbConn = @mysql_connect($host, $dbUser, $dbPass)) {
        return false;
    }

    // Select the database
    if (!@mysql_select_db($dbName)) {
        return false;
    }

    return $dbConn;
}

$host = 'localhost';   // Hostname of MySQL server
$dbUser = 'harryf';    // Username for MySQL
$dbPass = 'secret';    // Password for user
$dbName = 'sitepoint'; // Database name

$dbConn = &connectToDb($host, $dbUser, $dbPass, $dbName);
?>