<?php
// Include the DataObjects_Articles class
require_once 'Articles.php';

// Parse the database ini file
$dbconfig = parse_ini_file('db_dataobject.ini', true);

// Load Database settings
// (note main PEAR class is loaded by Articles.php)
foreach ($dbconfig as $class => $values) {
    $options = &PEAR::getStaticProperty($class, 'options');
    $options = $values;
}

// Instantiate the DataObject_Articles class
$articles = new DataObject_Articles();

// Assign a value to sue to search the 'Author' column
$articles->author = 'Kevin Yank';

// Perform the query
$articles->find();

echo 'Kevin has written the following articles:<br />';

// Loop through the articles
while ($articles->fetch()) {
    echo ' - ' . $articles->title . ', published: '.
        date(' jS M Y', $articles->published) . '<br />';
}
?>