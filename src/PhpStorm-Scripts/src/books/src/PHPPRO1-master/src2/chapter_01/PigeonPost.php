<?php

class PigeonPost extends Courier
{
    public function ship($parcel) {
        // fetch pidgeon
        // attach parcel
        // send
        return true;
    }

    public function ship(Parcel $parcel) {
        // sends the parcel to its destination
        return true;
    }

}