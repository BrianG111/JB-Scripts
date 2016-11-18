<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created by PhpStorm.
 * User: Brian Gerrits
 * Date: 17-11-2016
 * Time: 19:43
 */

// A query to select all articles
$sql = "SELECT COUNT(*) AS rumrows FROM articles";

// Query to count the rows returned
$queryResource = mysql_query($sql, $dbConn);

$row = mysql_fetch_array($queryResource, MYSQL_ASSOC);

echo $row['numrows'] . ' rows selected<br />';

// A query to select all articles
$sql = "SELECT * FROM articles ORDER BY title";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title:  '  . $row['title']  . '<br />';
    echo 'Author: '  . $row['author'] . '<br />';
    echo 'Body:   '  . $row['body']   . '<br />';
}
?>