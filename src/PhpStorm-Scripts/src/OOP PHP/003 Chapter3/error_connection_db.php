<?php
// Make connection to MySQL server
if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
    trigger_error('Could not connect to server: ' . mysql_error());
    die();
}

// Select the database
if (!mysql_select_db($dbName)) {
    trigger_error('Could not select database: ' . mysql_error());
    die();
}
// A query to select all articles
$sql = "SELECT * FROM articles  ORDER BY title";

// Run the query, identifying the connection
if (!$queryResource = mysql_query($sql, $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}
?>