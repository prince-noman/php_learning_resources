<?php
declare ( strict_types = 1 );

//Function Definition

// function functionName() {
//     code to be executed;
// }

//Function Definition & Call

// function greetingMsg()
// {
//     echo "Hello world!";
// }
// Both are treated as same
//greetingMsg(); // call the function
// GreetingMsg(); // call the function

// PHP Function Arguments & Parameters

// function familyName( $fname )
// {
//     echo "$fname Colins.\n";
// }

// familyName( "Jeny" );
// familyName( "Robert" );

// PHP Function Multiple Arguments & Parameters

// function familyName( $fname, $year )
// {
//     echo "$fname Refsnes. Born in $year \n";
// }

// familyName( "Hege", "1975" );
// familyName( "Stale", "1978" );
// familyName( "Kai Jim", "1983" );

// PHP Default Argument Value

// function setHeight( $minheight = 50 )
// {
//     echo "The height is : $minheight \n";
// }

// setHeight( 350 );
// setHeight(); // will use the default value of 50
// setHeight( 135 );

// Type Hinting of Arguments

// function addNumbers( int $a, int $b )
// {
//     return $a + $b;
// }
// echo addNumbers( 5, 4 );

// declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// // since strict is enabled and "5 days" is not an integer, an error will be thrown
//

// PHP Functions - Returning values

// function sum( int $x, int $y )
// {
//     $z = $x + $y;
//     return $z;
// }

// echo "5 + 10 = " . sum( 5, 10 );

// PHP Return Type Declarations

// function addNumbers( float $a, float $b ): float
// {
//     return $a + $b;
// }
// echo addNumbers( 1.2, 5.2 );

// function addNumbers(float $a, float $b) : float {
//     return (float)($a + $b);
//   }
//   echo addNumbers(1.2, 5.2);

// Passing Arguments by Reference

// function add_five( &$value )
// {
//     $value += 5;
// }

// $num = 2;
// add_five( $num );
// echo $num;

// PHP multiple type hinting & Return Type Declarations
// function myFunc( int | float $n1, int | float $n2 ): int | float
// {
//     return $n1 / $n2;
// }
// echo myFunc( 5, 2.2 );

// Void Return Type

// function myFunc( int $x, int $y ): void
// {
//     global $sum;
//     $sum = $x + $y;
// }
// myFunc( 5, 2 );
// echo $sum;

// PHP Anonymous Functions

// $myFunction = function ( $x ) {
//     return $x;
// };

// echo $myFunction( 5 );

// Use keyword

// $outerVar = 10;

// $myFunction = function ( $x ) use ( $outerVar ) {
//     return $x + $outerVar;
// };

// $result = $myFunction( 5 ); // Calls the anonymous function
// echo $result; // Outputs 15 (5 + 10)

// $x = 1;
// function myFunc( int $y ): int
// {
//     global $x;
//     return $x + $y;
// }

// echo myFunc( 2 ); // Outputs 3 (1 + 2)
