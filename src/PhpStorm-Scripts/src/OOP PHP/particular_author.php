<?php
// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// Select all results for a particular author
$sql = "SELECT * FROM articles WHERE author='HarryF'";

$result = $db->query($sql);

echo "Found " . $result->size() . " rows";
?>