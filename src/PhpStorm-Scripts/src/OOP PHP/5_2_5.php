<?php
$color = 'blue';
$settings['color'] = $color; // Makes a copy
$color = 'red'; // $color changes
echo $settings['color']; // Displays "red"
?>