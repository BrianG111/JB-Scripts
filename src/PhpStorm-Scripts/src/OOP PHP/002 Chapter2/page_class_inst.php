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
?>
