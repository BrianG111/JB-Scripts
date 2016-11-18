<?php
// Define reusable "chunks" of SQL
$table = " FROM articles";
$where = " WHERE author='HarryF'";
$order = " ORDER BY title";

// Query to count the rows returned
$sql = "SELECT COUNT(*) as numrows" . $table . $where;

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

$row = mysql_fetch_array($queryResource, MYSQL_ASSOC);

echo $row['nowrows'] . " rows selected<br />";

// A query to fetch the rows
$sql = "SELECT * " . $table . $where . $order;

// Run the query,identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['author'] . '<br />';
    echo 'Body: ' . $row['']
}