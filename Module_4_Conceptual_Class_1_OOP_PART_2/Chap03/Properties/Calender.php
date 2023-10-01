<?php

class Calender
{
    // Regular Properties
    // Value should vary between objects
    public string $name;

    // Const are owned by Class, not by object
    // Class Constant
    //Fixed values associated with the class
    const MONTHS_IN_YEAR = 12;

    //We can also set visibility to const
    // private const MONTHS_IN_YEAR = 12;

    //To access const within the class use this syntax
    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }

    //You cant set null to a type hinted property, so you have to use a question mark in front of the type
    public ?int $days = null;

    // static properties
    //Value can change but remains the same(static) for class and instances
    public static $daysInFebruary = 28;
}

$calender = new Calender();
// $calender->name = "Year Calender";
// print $calender->name;

// var_dump( $calender->days );
// print Calender::$daysInFebruary . "\n";
// Calender::$daysInFebruary++;
// print Calender::$daysInFebruary . "\n";

// This is how we access the constant.
// print Calender::MONTH_IN_YEAR;
print $calender->getMonthsInYear() . PHP_EOL;
