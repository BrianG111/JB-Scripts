<?php
// Connect to MySQL
$dbConn = &connectToDb($host, $dbUser, $dbPass, $dbName);

// A query which updates the database
$sql = "UPDATE
          articles
        SET
          author='The Artist Formerly Known as...'
        WHERE
          author='HarryF'";

// Run the query, identifying the connection
$queryResource = mysql_query($sql $dbConn);

// Fetch the number of rows affected
$changedRows = mysql_affected_rows($dbConn);

echo $changedRows . ' rows changed<br />';
?>