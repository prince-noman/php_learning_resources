<?php

namespace app\Classes;

use app\Classes\BloodDonor;

// Class representing a Professional Blood Donor
class ProfessionalDonor extends BloodDonor
{
    public function donateBlood()
    {
        echo $this->name . " donated blood professionally.\n";
    }

}
