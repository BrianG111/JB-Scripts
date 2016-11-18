<?php
//Include the MYSQL database connection class
require_once 'MySQL/Database/MySQL.php';

// A class which aggregates the MYSQL class
class Articles {
  var $db;
  var $result
  // Accept an instance of the MySQL class
  function Articles(&$db)
  {
    // Assign the object to a local member variable
    $this->db = &$db;
    $this->readArticles();
  }
  function readArticles()
  {
    // Perform a query using the MySQL class
    $sql = "SELECT * FROM articles LIMIT 0,5";
    $this->result = &$this->db->query($sql);
  }
  function fetch()
  {
    return $this->result->fetch();
  }
}

// Create an instance of the MySQL class
$db = &new MySQL ('localhost', 'harryf', 'secret', 'sitepoint');

// Create an instance of the Article class, passing it the MYSQL
// object
$articles = &new Articles($db);

while ($row = $articles->fetch()) {
  echo '<pre>';
  print_r($row);
  echo '</pre>';
}
?>
