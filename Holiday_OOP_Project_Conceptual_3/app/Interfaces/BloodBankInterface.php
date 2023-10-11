<?php

namespace app\Interfaces;

use app\Classes\BloodDonor;

// Interface for Blood Banks
interface BloodBankInterface
{
    public function receiveBlood( BloodDonor $donor );
    public function getDonorsByBloodGroup( $bloodGroup );
}
