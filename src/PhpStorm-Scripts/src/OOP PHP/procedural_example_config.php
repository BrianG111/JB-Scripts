<?php
// Procedural Example

// Connect to MySQL
$connection = mysql_connect('localhost', 'harryf', 'secret');

// Select desired database
mysql_select_db('sitepoint', $connection);

// Perform a query selecting five articles
$sql = 'SELECT * FROM articles LIMIT 0,5';
$result = mysql_query($sql, $connection);

// Display the results
while ($row = mysql_fetch_array($result)) {
  // Display results here

}
?>
