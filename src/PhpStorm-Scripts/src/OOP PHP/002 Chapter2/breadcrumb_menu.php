<?php
/**
 * Subclass for dealing with Categories, building a breadcrumb menu
 */
class CategoryHeader extends StandardHeader {
    /**
     * Constructor, taking the category name and the pages base URL
     */
    function CategoryHeader($category, $baseUrl)
    {
        // Call the parent constructor
        parent::StandardHeader($category);

        // Build the breadcrumbs
        $html = <<<EOD
<p><a href="$baseUrl">Home</a> >
<a href="$baseUrl?category=$category">$category></a></p>
EOD;
        // Call the parent setHeader() method
        $this-> setHeader($html);
    }
}

// Set the base URL
$baseUrl = 'breadcrumb_menu.php';

// An array of valid categories
$categories = array('PHP', 'MySQL', 'CSS');

// Check to see if we're viewing a valid category
if (isset($_GET['category']) &&
    in_array($_GET['category'], $categories)) {

    // Instantiate the subclass
    $header = new CategoryHeader($_GET['category'], $baseUrl);
}   else {

    //Otherwise it's the home page. Instantiate the Parent class
    $header = new StandardHeader('Home');
}

// Display the header
echo $header->getHeader();
?>
<h2>Categories</h2>
<p><a href="<?php echo $baseUrl; ?>?category=PHP">PHP</a></p>
<p><a href="<?php echo $baseUrl; ?>?category=MySQL">MySQL</a></p>
<p><a href="<?php echo $baseUrl; ?>?category=CSS">CSS</a></p>
</body>
</html>
