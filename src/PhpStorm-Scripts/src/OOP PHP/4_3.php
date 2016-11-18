<?php
// Connect to MySQL
$dbConn = & connectToDb($host, $dbUser, $dbPass, $dbName);

// A query to select al articles
$sql "SELECT * FROM articles ORDER BY title";

// Run the query, identifying the connection 
$queryResource = mysql_query($sql, $dbConn);

// Fetch rows from MySQL one at a time
while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['author'] . '<br />';
    echo 'Body: ' . $row['body'] . '<br />';    
}
echo $sql;
?>