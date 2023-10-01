<?php

// We can achieve Polymorphism in two way:
//1. Method Overloading -> Compile Time Polymorphism X
//2. Method Overriding -> Run Time Polymorphism

abstract class Vehicle
{
    abstract public function getBaseFare(): int;
    abstract public function getPerKiloFare(): int;

    public function getTotal( int $kilo ): int
    {
        return $this->getBaseFare() + ( $this->getPerKiloFare() * $kilo );
    }
    // Method Overloading, which is not allowed in PHP
    // public function getTotal( int $kilo, int $discount ): int
    // {
    //     return $this->getBaseFare() + ( $this->getPerKiloFare() * $kilo );
    // }
}

class Car extends Vehicle
{
    public function getBaseFare(): int
    {
        return 100;
    }
    public function getPerKiloFare(): int
    {
        return 10;
    }
    public function getTotal( int $kilo ): int
    {
        return 1000;
    }

}

class Bike extends Vehicle
{
    public function getBaseFare(): int
    {
        return 50;
    }
    public function getPerKiloFare(): int
    {
        return 5;
    }
    public function getTotal( int $kilo ): int
    {
        return 1000;
    }
}

$bike = new Bike();
echo $bike->getTotal( 10 );
