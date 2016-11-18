<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 10:26
 */

// Connect to MySQL
$dbConn = &connectToDb($host, $dbUser, $dbPass, $dbName);

// A query which updates the database
$sql = "UPDATE
          articles
        SET
          author='The Artist Formerly Knows as...'
        WHERE
          author='HarryF'";

// Run the query, identifying the connection
$queryResource = mysql_query($sql, $dbConn);

// Fetch the number of rows affected
$changedRows = mysql_affected_rows($dbConn);

echo $changedRows . ' rows changed<br />';
?>