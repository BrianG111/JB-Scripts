<?php
require 'Courier.php';
$mono = new courier('Monospace Delivery');

object(Courier)#1 (2) {
["name"] =>
string(18) "Monospace Delivery"
["home_country"] =>
NULL
    function __autoload($classname) {
        include strolower($classname) . '.php';
    }

$mono = new Courier('Monospace Delivery');

// accessing a property
echo "Courier name:" . $mono->name;

// calling a method
$mono->ship($parcel);
?>