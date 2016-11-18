<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

// Connect to MySQL
$dbConn = &connectToDb($host, $dbUser, $dbPass, $dbName);

// A query to select all articles
$sql = "SELECT * FROM articles ORDER BY title";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['title'] . '<br />';
    echo 'Body: ' . $row['body'] . '<br />';
}
?>