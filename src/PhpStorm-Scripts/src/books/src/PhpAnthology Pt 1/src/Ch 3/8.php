<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created by PhpStorm.
 * User: Brian Gerrits
 * Date: 16-11-2016
 * Time: 17:29
 */

// A query to select an article
$sql = "SELECT article_id FROM articles
        WHERE title='How to insert data'";

if (!$queryResource = mysql_query($sql, $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}

// Fetch a single row from the result
$row = mysql_fetch_array($queryResource, MYSQL_ASSOC);

// A new title
$title = 'How to update data';

$sql = "UPDATE
          articles
        SET
           title='$title'
        WHERE
          article_id='" . $row['article_id'] . "'";

if (!$queryResource = mysql_query($sql, $dbConn)) {
    trigger_error('Query error ' . mysql_error() . ' SQL: ' . $sql);
}