<?php
// Include the MySQL database connection class
require_once 'Database/MySQL.php';

// A class which aggregates
class Articles {
    var $db;
    var $result;
    // Accept an instance of the MySQL class
    function Articles(&$db)
    {
        // Assign the object to a local member variable
        $this->db = &$db;
        $this->readArticles();
    }
    function fetch()
    {
        return $this->result->fetch();
    }
}

// Create an instance of the MySQL class
$db = &new MySQL('localhost', 'harryf', 'secret', 'sitepoint');

// Create an instance of the Article class, passing it the MySQL
// object
$articles = &new Articles($db);

while ($row = $articles->fetch()) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
?>