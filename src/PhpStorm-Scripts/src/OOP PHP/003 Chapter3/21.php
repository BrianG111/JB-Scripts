<?php
// Include the MySQL class
require_once 'MySQL.php';

$host = 'localhost';
$dbUser = 'harryf';
$dbPass = 'secret';
$dbName = 'sitepoint';
$db = &new MySQL($host, $dbUser, $dbPass, $dbName);

// A query to show the tables in the database
$sql = "SHOW TABLES FROM sitepoint";

// Execute query
$result = $db->query($sql);

//Get the number of tables found
$numTables = $result->size();

// Build a string of table names
$tables = '';
$i = 1;
while ($table = $result->fetch()) {
    $tables .= $table['Tables_in_sitepoint'];
    if ($i < $numTables) {
        $tables .= ', ';
    }
    $i++;
}

// Build the backup query
$sql = "BACKUP TABLE $tables TO 'backups'";

// Perform the query
$db->query($sql);

if (!$db->isError()) {
    echo 'Backup succeeded';
} else {
    echo 'Backup failed';
}
?>