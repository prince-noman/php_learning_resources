<?php
// The PHP for Loop

// Loop's Parameters:
//1. variable initialization
//2. condition
//3. increment or decrement the variable

//Syntax
// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
// }

// The for loop is used when you know in advance how many times the script should run.


// Increment way:

for ( $x = 0; $x <= 10; $x++ ) {
    echo "The number is: $x \n";
}

// Decrement way:

for ( $x = 10; $x >= 0; $x-- ) {
    echo "The number is: $x \n";
}

//Nested for loop

for ( $i = 1; $i <= 2; $i++ ) {
    echo "Times Table of : $i \n";

    for ( $j = 1; $j <= 10; $j++ ) {
        $product = $i * $j;
        echo "$i x $j = $product\n";
    }

    echo "\n";
}