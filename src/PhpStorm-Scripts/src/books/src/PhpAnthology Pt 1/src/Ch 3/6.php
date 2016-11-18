<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created with PhpStorm.
 * User: Brian Gerrits
 * Date: 16-11-2016
 * Time: 16:23
 */

// Make connection to MySQL server
if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
    trigger_error('Could not connect to server: ' . mysql_error());
    die();
}

// Select the database
if (!mysql_select_db($dbName)) {
    trigger_error('Could not select database: ' . mysql_error());
}

// A query to select all articles
$sql = "SELECT * FROM articles ORDER BY title";

// Run the query, identifying the connection
if (!$queryResource = mysql_query($sql, $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}
?>