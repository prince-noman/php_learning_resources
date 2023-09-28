<?php

class Attendee
{
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public static function getName()
    {
        echo "My name is Prince";
    }
}

// $prince = new Attendee();
// $rakib  = new Attendee();
// $noman  = new Attendee();

// Accessing static property
// var_dump( Attendee::$count );

// Accessing static method
// print_r( Attendee::getCount() );

print_r( Attendee::getName() );
