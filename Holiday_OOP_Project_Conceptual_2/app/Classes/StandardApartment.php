<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Traits\HasBalcony;

// Class representing a Standard Apartment
class StandardApartment extends Apartment
{
    use HasBalcony; // Use the HasBalcony trait

    public function calculateRent()
    {
        $this->rent = $this->area * 0.2 + $this->numberOfBedrooms * 100;

        if ( $this->hasBalcony() ) {
            $this->rent += 50;
        }

    }

}
