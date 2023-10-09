<?php

namespace app\Traits;

// Trait for apartments with balconies
trait HasBalcony
{
    protected $balcony;

    public function setBalcony( $hasBalcony )
    {
        $this->balcony = $hasBalcony;
    }

    public function hasBalcony()
    {
        return $this->balcony;
    }

}
