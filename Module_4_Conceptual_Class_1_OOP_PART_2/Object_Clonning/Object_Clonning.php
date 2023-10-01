<?php

class Manager
{
    public int $id;
    public string $name;
    public function __construct( $id, $name )
    {
        $this->id   = $id;
        $this->name = $name;
    }

}

class Department
{
    public ?Manager $manager;
    public string $name;
    public function __construct( $name )
    {
        $this->name = $name;
    }

    //Deep Clone Process
    // public function __clone()
    // {

    //     if ( isset( $this->manager ) ) {

    //         $this->manager = clone $this->manager;
    //     }

    // }

}

// Referencing the same object
$department1 = new Department( 'CSE' );
// $department2 = $department1;

// Indecating Same Object and aslo same memory reference

// print_r( $department1 );
// print_r( $department2 );

// As indicated above, $department1 and $department2 are pointing to the same object's reference, so when we are assigning a new value to $department2, it will also change $department1

// $department2->name = 'EEE';

// print_r( $department1 );
// print_r( $department2 );

// After assigning manager property of $department1, it will also supply the manager property to $department2 as $department2 is the reference of $department1
// $department1->manager = new Manager( 1, 'John' );

// print_r( $department1 );

// print_r( $department2 );

//Cloning (Shallow Clone)

//When we need to clone of an object we should use "clone" keyword before it, so that it won't affect the original object
// $department2       = clone $department1;
// $department2->name = 'Mechanical';

// print_r( $department1 );

// print_r( $department2 );

// Now we are assigning manager's property of $department2, so we can expect that our $department2 will have these property, but the scenario is different. As we are using "clone" keyword on Department class's object,$department1 and $department2 are pointing to the different  object's reference, when we are assigning a new value to $department2, it will also change $department1. So we need to perform clone operation on Manager class's object also.
// $department2->manager->id   = 2;
// $department2->manager->name = 'Prince';

// print_r( $department1 );

// print_r( $department2 );

//After Performing clone operation inside Department class. I mean uncommenting the "__clone()" magic method.
// print_r( $department1 );
// print_r( $department2 );
