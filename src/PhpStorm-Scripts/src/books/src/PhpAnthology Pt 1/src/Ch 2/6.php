<?php
$lookandfeel= new LookAndFeel(); // Create a LookAndFeel
$output = new Output($lookandfeel); // Pass it to an Output

// Modify some settings
$lookandfeel->getColor('red');
$lookandfeel->setSize('large');

// Display the output
echo $output->display();
?>

