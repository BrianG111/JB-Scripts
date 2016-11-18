<?php
// Select all rows but display relevance
$sql = "SELECT
           *, MATCH (title, body, author)
        AGAINST
          ('The PHP Anthology Released Long Word Matching')
        AS
          score
        FROM
          articles
        ORDER BY score DESC";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['author'] . '<br />';
    echo 'Body: ' . $row['body'] . '<br />';
    echo 'Score: ' . $row['score'] . '<br />';
}
?>