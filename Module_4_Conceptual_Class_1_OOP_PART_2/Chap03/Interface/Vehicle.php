<?php

abstract class Vehicle
{
    abstract public function getBaseFare(): int;
    abstract public function getPerKiloFare(): int;

    public function getTotal( int $kilo ): int
    {
        return $this->getBaseFare() + ( $this->getPerKiloFare() * $kilo );
    }

}

// Interface has only the functions name. No implementation.
// It is used when we need to implement a business logic to a particular class and if in future we need the same business logic for another class we just implement it and write our own logic defining the function's body. So here we are not overriding anything.
interface HourlyRentable
{
    public function getHourlyRate( $hours );
}

interface DailyRentable
{
    public function getdailyRate( $days );
}

class Car extends Vehicle implements HourlyRentable, DailyRentable
{
    public function getBaseFare(): int
    {
        return 100;
    }
    public function getPerKiloFare(): int
    {
        return 10;
    }

    public function getHourlyRate( $hours )
    {
        return 50 * $hours;
    }

    public function getdailyRate( $days )
    {
        return 500 * $days;
    }

}

class Bike extends Vehicle implements HourlyRentable
{
    public function getBaseFare(): int
    {
        return 50;
    }
    public function getPerKiloFare(): int
    {
        return 5;
    }
}

// $car = new Car();
// echo $car->getTotal( 2 );
// echo $car->getHourlyRate( 3 );
// echo $car->getdailyRate( 2 );

$bike = new Bike();
