<?php

namespace app\Traits;

use app\Classes\BloodDonor;

// Trait for Blood Testing
trait BloodTestingTrait
{
    public function testBloodGroup( BloodDonor $donor )
    {
        echo "Blood Test for Donor: " . $donor->getName() . "\n";
        echo "Blood Group: " . $donor->getBloodGroup() . "\n";
        echo "Result: Blood Group is compatible\n";
    }

}
