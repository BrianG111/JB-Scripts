<?php
// A query to select all articles
$sql; = "SELECT * FROM articles ORDER BY title";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch the number of rows selected
$numRows = mysql_num_rows($queryResource);

echo $numRows . ' rows selected<br />';

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title:  '  . $row['title']  . '<br />';
    echo 'Author: '  . $row['author'] . '<br />';
    echo 'Body:   '  . $row['body']   . '<br />';
}
?>