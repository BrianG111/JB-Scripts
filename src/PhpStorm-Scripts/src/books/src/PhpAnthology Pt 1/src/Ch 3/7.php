<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created with PhpStorm.
 * User: Brian Gerrits
 * Date: 16-11-2016
 * Time: 16:32
 */

// A query to INSERT data
$sql = "INSERT INTO
          articles
        SET
          title = '$title',
          body = '$body',
          author = '$author'";

// Run the query, identifying the connection
if (!$queryResource = mysql_query($sql $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}
?>

