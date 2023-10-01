<?php

class Math
{
    public function __construct( public int $a, public int $b )
    {}

    public function sum()
    {
        return $this->a + $this->b;
    }
}

// Comparing in perspective to inheritance
class Geometry extends Math
{
    public function __construct( int $a, int $b )
    {

        parent::__construct( $a, $b );
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}

$math1 = new Math( 1, 2 );
// $math2 = new Math( 1, 2 );
// When two objects are created from the same class with same value, they are considered equal while checking with loose type check
// var_dump( $math1 == $math2 );

//When two objects are created from the same class with same value, they are considered different while checking with strict type check.
// var_dump( $math1 === $math2 );

// $math2 = new Math( 5, 9 );
//When two objects are created from the same class with different value, they are considered different while checking with loose or strict type check.
// var_dump( $math1 == $math2 );
// var_dump( $math1 === $math2 );

//In perspective to inheritance, when object is created from child class and we are comparing them, they are different while checking with loose or strict type check.
$math2 = new Geometry( 1, 2 );

var_dump( $math1 === $math2 );
