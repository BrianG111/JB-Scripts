<?php
// a quert INSERT data
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