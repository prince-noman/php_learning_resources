<?php

// Encapsulation is a way of hiding the implementation details of an object.
// It can be done in two level. One is method level(adding getter/setter and access modifier) and other is property level(access modifier).

class Bid
{
    private $minimumBid = 5;

    private $bidAmount;

    public function setBidAmount( $amount )
    {

        if ( $amount < $this->minimumBid ) {
            $this->bidAmount = $this->minimumBid;
            return;
        }

        $this->bidAmount = $amount;
    }

    public function getBidAmount()
    {
        return $this->bidAmount;
    }

}

$bid = new Bid();

// When we are giving value less than the minimumBid, it will set the value of minimumBid bidAmount.

// $bid->setBidAmount( 4 );

// print $bid->getBidAmount();

// When we are giving value greater than the minimumBid, it will set the value to bidAmount.
$bid->setBidAmount( 10 );
print $bid->getBidAmount();
