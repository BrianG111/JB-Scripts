<?php

namespace shipping;

class Courier
{
    public $name;
    public $home_country;

    public static function getCouriersByCountry($country) {
        // get a list of couriers with their home_country = $country
        // create a Courier object for each result
        // return an array of the results
        return $courier_list;
    }

    public function ship($parcel) {
        // sends the parcel to its destination
        return true;
    }

    public function calculateShipping($parcel) {
        // look up the rate for destination, we'll invent one
        $rate = 1.78;

        // calculate the cost
        $cost = $rate * $parcel->weight;
    }

    public saveAsPreferredSupplier(Courier $courier) {
    // add to list and save
    return true;
    }
    
    $courier = new PidgeonPost('Local Avian Delivery Ltd');

    if($courier instanceOf Courier) {
        echo $courier->name . " is a Courier\n";
    }
    if($courier instanceOf PigeonPost) {
        echo $courier->name . " is a PigeonPost\n";
    }
    if($courier instanceOf Parcel) {
        echo $courier->name . " is a Parcel\n";
    }

    $box1 = new Parcel();
    $box1->destinationCountry = 'Denmark';

    $box2 = $box1;
    $box2->destinationCountry = 'Brazil';

    echo 'Parcels need to ship to: '
     . $box1->destinationCountry . ' and '
        .$box2->destinationCountry;
}

// no need to instantiate any object

// find couriers in Spain:
$spanish_couriers = Courier::getCouriersByCountry('Spain');

namespace Fred;
$courier new \shipping\Courier();

use shop\shipping;
use admin\user as u;

// which couriers can we use?
$couriers = shipping\Courier::getCouriersByCountry('India');

// look up this user's account and how their name
$user = new u\User();
echo $user->getDisplayName();
?>