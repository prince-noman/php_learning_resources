<?php

class Reservation
{
    private $host  = "Prince";
    private $guest = "Noman";

    //Cancel
    public function cancel()
    {
        //By using the below methods we are using abstraction [ we are hiding the actual implementation of these methods inside the cancel method]
        $this->sendCancelNotification();
        $this->refundGuest();
        echo 'A lots of things to do to cancel the reservation which this cancel method does not need to know how they are implemented.';
    }

    //Why Private? This should not be accessible outside the class
    private function sendCancelNotification()
    {
        //Send notification
        echo "Send Cancel Notification " . $this->host . PHP_EOL;
    }

    private function refundGuest()
    {
        //Refund the guest
        echo "Refund Guest " . $this->guest . PHP_EOL;
    }

}

$reservation = new Reservation();
echo $reservation->cancel();
