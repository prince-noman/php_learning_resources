<?php

/*==============
Tigthly Coupled
================*/
// class Driver
// {
//     protected Vehicle $vehicle;
//     public function __construct()
//     {
//Here we are creating a new instance of the vehicle inside the class
//         $this->vehicle = new Vehicle();
//     }
// }

// class Vehicle
// {
//     protected Engine $engine;

//     public function __construct()
//     {
//Here we are creating a new instance of the vehicle inside the class
//         $this->engine = new Engine();
//     }
// }

/*==============
Loosely Coupled
================*/
class Driver
{
    protected Vehicle $vehicle;
    public function __construct( Vehicle $vehicle )
    {
        $this->vehicle = $vehicle;
    }

    public function setVehicle( Vehicle $vehicle )
    {
        $this->vehicle = $vehicle;
    }
}

class Vehicle
{
    protected Engine $engine;

    public function __construct( Engine $engine )
    {
        $this->engine = $engine;
    }
}

class Engine
{

}
// We are creating a new instance of the vehicle outside the class
$engine  = new Engine();
$vehicle = new Vehicle( $engine );
$driver  = new Driver( $vehicle );
