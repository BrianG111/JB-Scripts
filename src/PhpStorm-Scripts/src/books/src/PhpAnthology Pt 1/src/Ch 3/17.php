
<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 10:43
 */

// A query to insert a row
$sql = "INSERT INTO
          articles
        SET
           title='How to use mysql_insert_id()',
           body='This is an example',
           author='HarryF'";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch the inserted ID
$insertID = mysql_insert_id($dbConn);

echo 'The new row has ID: ' . $insertID;
?>