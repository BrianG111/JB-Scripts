<?php
// Include the MySQL class
require_once 'Database\MySQL.php';

$host = 'localhost';   // Hostname of MySQL server
$dbUser = 'harryf';    // Username for MySQL
$dbPass = 'secret';    // Password for user
$dbName = 'sitepoint'; // Database name

// Connect to MySQL
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

$sql = "SELECT * FROM articles ORDER BY title";

// Perform a query getting back a MySQLResult object
$result = &$db->query($sql);

// Iterate through the results
while ($row = $result->fetch()) {
    echo 'Title: ' . $row['title'] . '<br />';
    echo 'Author: ' . $row['author'] . '<br />';
    echo 'Body: ' . $row['body'] . '<br />';
}
?>