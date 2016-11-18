<?php
// Connect to MySQl
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

$title = 'How to insert data';
$body = 'This is the body of the article';
$author = 'HarryF';

// a query INSERT data
$sql = "INSERT INTO
          articles
        SET
           title  = '$title',
           body   = '$body',
           author = '$author'";

// Run the query, identifying the connection
if (!$queryResource = mysql_query($sql, $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}
?>