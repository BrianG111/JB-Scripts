<?php
// A query to select all articles
$sql = "SELECT * FROM articles";

// Initialize $_GET['order'] if it doesn't exist
if (!isset($_GET['order']))
  $_GET['order'] = FALSE;

  // Use a conditional switch to determine the order
  switch ($_GET['order']) {
      case 'author';
      // Add to the $sql string
      $sql .= " ORDER BY author";
      break;
    default:
      // Default sort by title
      $sql .= "ORDER BY title";
      break;      
  }

  // Run the query, identifying the connection
  if (!$queryResource = mysql_query($sql, $dbConn)) {
      trigger_error('Query error ' . mysql_error() . 'SQL: ' . $sql);
  }
  ?>
  <table>
  <tr>
  <th><a href="<?php echo $_SERVER['PHP_SELF']; ?>?order=title"
  >Title</a></th>
  <th><a href="<?php echo $_SERVER['PHP_SELF']; ?>?order=author"
   >Author</a></th>
   </tr>
   <?php
   while ($row = mysql_fetch_array($queryResource, MYSQL_ASSOC)) {
       echo "<tr>\n";
       echo "<td>" . $row['title'] . "</td>";
       echo "<td>" . $row =['author'] . "</td>";
       echo "</tr>\n";
   }
   ?>
   </table>