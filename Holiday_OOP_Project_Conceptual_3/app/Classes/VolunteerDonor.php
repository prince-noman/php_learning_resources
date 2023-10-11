<?php

namespace app\Classes;

use app\Classes\BloodDonor;

// Class representing a Volunteer Blood Donor
class VolunteerDonor extends BloodDonor
{
    public function donateBlood()
    {
        echo $this->name . " donated blood.\n";
    }

}
