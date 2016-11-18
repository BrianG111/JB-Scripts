<?php
// Include the MySQLDump Class
require_once 'MySQLDump.php';

$dbUser = 'harryf';
$dbPass = 'secret';
$dbName = 'sitepoint';
$dest = 'backups';
$zip = 'bz2';

// Instantiate MySQLDump
$mysqlDump = new MySQLDump($dbUser, $dbPass, $dbName, $dest
                           $zip);

// Perform the backup
$mysqlDump->backup();
?>