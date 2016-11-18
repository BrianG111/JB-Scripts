<?php
$lookandfeel = new LookAndFeel(); // Create a LookAndFeel
$output = new Output($lookandfeel); // Pass it to an Output

// Modify some settings
$lookandfeel->setColor('red');
$lookandfeel->setSize('large');
function Output(&$lookandfeel)
{
    $this->lookandfeel = &$lookandfeel;
}
// Display the output
echo $output->display();
?>
