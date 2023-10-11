<?php

namespace app\Classes;

// Abstract class representing a Blood Donor
abstract class BloodDonor
{
    protected $name;
    protected $bloodGroup;
    protected $age;

    public function __construct( $name, $bloodGroup, $age )
    {
        $this->name       = $name;
        $this->bloodGroup = $bloodGroup;
        $this->age        = $age;
    }

    abstract public function donateBlood();

    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    public function displayDonorInfo()
    {
        echo "Name: " . $this->name . "\n";
        echo "Blood Group: " . $this->bloodGroup . "\n";
        echo "Age: " . $this->age . " years\n";
    }

    public function getName()
    {
        return $this->name;
    }

}
