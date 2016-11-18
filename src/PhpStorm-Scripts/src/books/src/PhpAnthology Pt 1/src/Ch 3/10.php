<?php
/**
 * Copyright (c) Brian Gerrits 2016.
 */

/**
 * Created by PhpStorm.
 * User: Brian Gerrits
 * Date: 16-11-2016
 * Time: 17:59
 */

$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// A query to select an article
$sql = "SELECT article_id FROM articles
        WHERE title='How to insert data'";

$result = $db->query($sql);

$row = $result->fetch();

// A new title
$title = 'How to update data';

$sql = "UPDATE
          articles
        SET
          title='" . $title. "'
        WHERE
          article_id='" . $row['article_id']  "'";

$db->query($sql);

if (!$db->isError()) {
    echo 'UPDATE successful';
} else {
    echo 'UPDATE failed';
}
?>