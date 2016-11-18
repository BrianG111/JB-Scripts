<?php
function &connectToDb($host, $dbUser, $dbPass, $dbName)
{
    // Make connection to MySQL server
    if (!$dbConn = @mysql_connect($host, $dbUser, $dbPass)) {
        return false;
    }

    // Select the database
    if (!@mysql_select_db($dbName)) {
        return false;
    }

    return $dConn;
}

$host = 'localhost';
$dbUser = 'harryf';
$dbPass = 'secret';
$dbName = 'sitepoint';

$dbConn = &connectToDb($host, $dbUser, $dbPass, $dbName);
?>