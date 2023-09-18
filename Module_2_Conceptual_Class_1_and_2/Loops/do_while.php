<?php

//Syntax
// $variable;
// do {
//   code to be executed;
//   increment or decrement the variable;
// } while (condition is true);

//Increment way
$x = 1;

do {
    echo "The number is: $x \n";
    $x++;
} while ( $x <= 5 );

//Decrement way
$x = 5;

do {
    echo "The number is: $x \n";
    $x--;
} while ( $x >= 1 );

// First do then check condition

$x = 6;

do {
    echo "The number is: $x \n";
    $x++;
} while ( $x <= 5 );
