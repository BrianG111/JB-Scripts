<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 10:23
 */

// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// Select all results for a particular author
$sql = "SELECT * FROM articles WHERE author='HarryF'";

$result = $db->query($sql);

echo "Found " . $result->size() . " rows";
?>