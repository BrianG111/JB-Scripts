<?php
// A query to insert a row
$sql = "INSERT INTO
          articles
        SET
          title='How to use mysql_insert_id()',
          body='This is an example',
          author='HarryF'";

// Run the query, identifying the ocnnection
$queryResource = mysql_query($sql, $dbConn);

// Fetch the inserted ID
$insertID = mysql_insert_id($dbConn;

echo 'The new row has ID:' . $insertID;
?>