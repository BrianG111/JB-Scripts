<?php
// OOP Example

// Include MySQL class
require_once 'Database/MySQL.php';

// Instantiate MySQL class, connect to MySQL and select database
$db = new MySQL('localhost', 'harryf', 'secret', 'sitepoint');

// Perform a query selecting five articles
$sql = 'SELECT * FROM articles LIMIT 0,5';
$result = $db->query($sql); // Creates a MySQLResult object

// Display the results
while ($row = $result->fetch()) {
  // Display results here
}
?>
