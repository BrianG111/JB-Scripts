<?php
// Include the MySQL class
require_once 'MySQL.php';

$host = 'localhost';
$dbUser = 'harryf';
$dbPass = 'secret';
$dbName = 'sitepoint';

$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// A query to insert a row
$sql="INSERT INTO
        articles
      SET
        title='How to use mysql_insert_id()',
        body='This is an example',
        author='HarryF'";

$result = $db->query($sql);

echo 'The new row as ID: ' . $result_>insertID();
?>