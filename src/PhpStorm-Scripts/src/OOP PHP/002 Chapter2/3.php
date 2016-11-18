<?php
// Page class
class Page {

   // Declare a class member variable
   var $page;

   // The constuctor function
   function page()
   {
     $this->page = '';
   }

   // Generates the top of the page
   function addHeader($title)
   {
     $this->page .= <<<EOD
<html>
<head>
<title>$title</title>
<body>
<h1 align="center">$title</h1>
EOD;
   }

   // Adds some more text to the page
   function addContent($content)
   {
     $this->page .= $content;
   }

   // Generates the bottom of the page
   function addFooter($year, $copyright)
   {
     $this->page .= <<<EOD
<div align="center">&copy; $year $copyright</div>
</body>
</html>
EOD;
  }

  // Gets the contents of the page
  function get()
  {
    return $this->page;
  }
}

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
