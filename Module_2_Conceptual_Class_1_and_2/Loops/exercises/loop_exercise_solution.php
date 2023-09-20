<?php

/*==========
Solutions:
============ */

// => Easy
// Exercise 1: Print the Even Number from 1 to 50

// $limit = 50;

// echo "Even numbers up to $limit:\n";

// for ( $i = 2; $i <= $limit; $i += 2 ) {
//     echo "$i\n";
// }

// Exercise 2: Print the Odd Number from 1 to 50

// $limit = 50;

// echo "Odd numbers up to $limit:\n";

// for ( $i = 1; $i <= $limit; $i += 2 ) {
//     echo "$i\n";
// }

// Exercise 3: Print the Sum of Even Numbers from 1 to 50

// $sum = 0;

// for ( $i = 2; $i <= 50; $i += 2 ) {
//     $sum += $i;
// }

// echo "Sum of even numbers from 1 to 50: $sum";

// Exercise 4: Print the Sum of Odd Numbers from 1 to 50

// $sum = 0;

// for ( $i = 1; $i <= 50; $i += 2 ) {
//     $sum += $i;
// }

// echo "Sum of odd numbers from 1 to 50: $sum";

// Exercise 5: Print the Sum of Numbers from 1 to 50

// $sum = 0;

// for ( $i = 1; $i <= 50; $i++ ) {
//     $sum += $i;
// }

// echo "Sum of numbers from 1 to 50: $sum";

// Exercise 6: Print the Square of Numbers from 1 to 10

// for ( $i = 1; $i <= 10; $i++ ) {
//     $square = $i * $i;
//     echo "Square of $i is: $square\n";
// }

// => Medium
// Exercise 7: Count Digits in a Number (Like $numbers = 12345)

// $nums  = 12345;
// $count = 0;

// while ( $nums != 0 ) {
//     $nums = (int) ( $nums / 10 );
//     $count++;
// }

// echo "Number of digits:" . $count;

// Exercise 8: Multiplication Table of 1 to 10;

// for ( $i = 1; $i <= 10; $i++ ) {
//     echo "Multiplication Table of : $i \n";

//     for ( $j = 1; $j <= 10; $j++ ) {
//         $product = $i * $j;
//         echo "$i x $j = $product\n";
//     }

//     echo "\n";
// }

// Exercise 9: Reverse a Given String ($string = "I love PHP"); [For Module 2, You can skip this problem]

// $string   = "I love PHP";
// $reversed = "";

// for ( $i = strlen( $string ) - 1; $i >= 0; $i-- ) {
//     $reversed .= $string[$i];
// }

// echo "Original String: $string\n";
// echo "Reversed String: $reversed";


// => Hard
// Exercise 10: Fibonacci Sequence of First 10 Numbers.

// $n = 10;
// $a = 0;
// $b = 1;

// for ( $i = 1; $i <= $n; $i++ ) {
//     echo $a . " ";
//     $next = $a + $b;
//     $a    = $b;
//     $b    = $next;
// }
// Exercise 11: Factorial Calculation of a Given Number.

// $num       = 5; // Change to the desired number for which you want to calculate the factorial
// $factorial = 1;

// for ( $i = 1; $i <= $num; $i++ ) {
//     $factorial *= $i;
// }

// echo "The factorial of $num is: $factorial";