<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 11:28
 */

// Select all rows but display relvance
$sql = "SELECT
          *, MATCH (title, body, author)
        AGAINST
           ('The PHP Anthology Released Long Word Matching')
        AS
          score
        FROM
          articles
        ORDER BY score DESC";

// Run the query, identifying the connection]
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows form MYSQL one at a time
while ($row = mysql_fetch_row($queryResource, MYSQL_ASSOC)) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['author'] . '<br />';
    echo 'Body: ' . $row['body'] . '<br />';
    echo 'Score: ' . $row['score'] . '<br />';
}
?>