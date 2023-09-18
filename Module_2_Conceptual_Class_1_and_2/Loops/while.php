<?php

// The PHP while Loop

// The while loop executes a block of code as long as the specified condition is true.

//Syntax

// $variable;
// while (condition is true) {
//     code to be executed;
//     increment or decrement the variable;
// }

//Increment Way
$x = 1;

while ( $x <= 5 ) {
    echo "The number is: " . $x . "\n";
    $x++;
}

//Decrement Way
$x = 5;

while ( $x >= 1 ) {
    echo "The number is: " . $x . "\n";
    $x--;
}
