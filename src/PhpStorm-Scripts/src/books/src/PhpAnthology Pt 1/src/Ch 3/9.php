<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created by PhpStorm.
 * User: Brian Gerrits
 * Date: 16-11-2016
 * Time: 17:47
 */

// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName)

$title  = 'How to insert data';
$body   = 'This is the body of the article';
$author = 'HarryF';

// A query to INSERT data
$sql = "INSERT INTO
          articles
        SET
          title  = '$title',
          body   = '$body',
          author = '$author'";

$db->query($sql);

if (!$db->isError()) {
    echo 'INSERT successful';
} else {
    echo 'INSERT failed';
}
?>