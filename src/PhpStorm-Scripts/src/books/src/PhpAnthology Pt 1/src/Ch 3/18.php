<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 10:56
 */

// Include the MySQL class
require_once 'SPLIB/Database/MySQL.php';

$host   = 'localhost';
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

echo 'The new row as ID: ' . $result->insertID();
?>