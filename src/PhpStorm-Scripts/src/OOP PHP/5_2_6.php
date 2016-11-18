<?php
$color = 'blue';
$settings['color'] = $color; // Makes a copy
$color = 'red'; // Color changes
echo $settings['color']; // Displays "blue"
?>