<?php
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// A query to select an article
$sql = "SELECT article_id FROM articles
        WHERE title= 'How to insert data'";

$result = $db->fetch();

// A new title
$title = 'How to update data';

$sql = "UPDATE
          articles
        SET
          title='". $title . "'
        WHERE
          article_id'" . $row['article_id']. "'";

$db->query($sql);

if (!$db->isError()) {
    echo 'UPDATE successful';
} else {
    echo 'UPDATE failed';
}
?>