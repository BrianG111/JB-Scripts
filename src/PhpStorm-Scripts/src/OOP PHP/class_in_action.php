<?php
// Instantiate the Page class
$webPage = new Page();

// Add the header to the page
$webPage-> addHeader('A Page Built with an Object');

// Add Something to the body of the page
$webPage->addContent("<p align=\"center\">This page was " .
  "generated using an object</p>\n");

// Add the footer to the page
$webPage->addFooter(date('y'), 'Object Designs Inc.');

// Display the page
echo $webPage->get();
?>
