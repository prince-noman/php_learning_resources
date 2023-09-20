<?php

// => Easy
//1. Write a program in PHP to find the square of any number using the function.

// function calculateSquare( $number )
// {
//     $square = $number * $number;
//     return $square;
// }

// $number = 5; // Change this to the desired number
// $square = calculateSquare( $number );

// echo "The square of $number is: $square";

//2. Write a PHP program to calculate the area of a circle using function.

// function calculateCircleArea( $radius )
// {
//     $area = M_PI * pow( $radius, 2 );
//     // $area = 3.1416 * pow( $radius, 2 ); // You can also write like this.
//     return number_format( $area, 2 );
// }

// $radius = 5; // Change this to the desired radius

// $area = calculateCircleArea( $radius );

// echo "The area of the circle with radius $radius is: $area";

//3. Write a PHP program to calculate the area of a rectangle using function.

// function calculateRectangleArea( $length, $width )
// {
//     $area = $length * $width;
//     return $area;
// }

// $length = 10; // Change this to the desired length of the rectangle
// $width  = 5; // Change this to the desired width of the rectangle

// $area = calculateRectangleArea( $length, $width );

// echo "The area of the rectangle with length $length and width $width is: $area";

//4. Write a program in PHP to swap two numbers using a function.

// function swapNumbers( &$num1, &$num2 )
// {
//     $temp = $num1;
//     $num1 = $num2;
//     $num2 = $temp;
// }

// $number1 = 5; // Change this to the first number
// $number2 = 10; // Change this to the second number

// echo "Before swapping: Number1 = $number1, Number2 = $number2\n";

// swapNumbers( $number1, $number2 );

// echo "After swapping: Number1 = $number1, Number2 = $number2";

//5. Write a program in PHP to check if a given number is even or odd using the function.

// function isEvenOrOdd( $number )
// {

//     if ( $number % 2 == 0 ) {
//         return "Even";
//     } else {
//         return "Odd";
//     }

// }

// $number = 7; // Change this to the number you want to check
// $result = isEvenOrOdd( $number );

// echo "$number is $result";

// => Medium

//6. Write a PHP program to find sum of all even or odd numbers in given range using recursion.

// function sumEvenOrOddInRange( $start, $end, $isEven = true )
// {

//     if ( $start > $end ) {
//         return 0;
//     } elseif (  ( $start % 2 == 0 ) == $isEven ) {
//         return $start + sumEvenOrOddInRange( $start + 1, $end, $isEven );
//     } else {
//         return sumEvenOrOddInRange( $start + 1, $end, $isEven );
//     }

// }

// $start = 1; // Change this to the desired start of the range
// $end   = 10; // Change this to the desired end of the range

// $evenSum = sumEvenOrOddInRange( $start, $end, true ); // Sum of even numbers
// $oddSum  = sumEvenOrOddInRange( $start, $end, false ); // Sum of odd numbers

// echo "Sum of even numbers from $start to $end: $evenSum\n";

// echo "Sum of odd numbers from $start to $end: $oddSum\n";

//7. Write a PHP program to find sum of all even numbers in given range using recursion.

// function sumEvenNumbersInRange( $start, $end )
// {

//     if ( $start > $end ) {
//         return 0;
//     } elseif ( $start % 2 == 0 ) {
//         return $start + sumEvenNumbersInRange( $start + 2, $end );
//     } else {
//         return sumEvenNumbersInRange( $start + 1, $end );
//     }

// }

// $start = 1; // Change this to the desired start of the range
// $end   = 10; // Change this to the desired end of the range

// $evenSum = sumEvenNumbersInRange( $start, $end );

// echo "Sum of even numbers from $start to $end: $evenSum\n";

//8. Write a PHP program to find sum of all numbers in given range using recursion. (if n=10, the it should sum 1 to 10, all the numbers)

// function sumInRange( $n )
// {

//     if ( $n <= 0 ) {
//         return 0;
//     } else {
//         return $n + sumInRange( $n - 1 );
//     }

// }

// // Define the last number of the range
// $n = 10; // Change this to the last number you want

// // Calculate the sum using the recursive function
// $sum = sumInRange( $n );

// echo "Sum of numbers from 1 to $n is: $sum";

//==========================================
// Another Implementation
//==========================================

// function sumInRange( $start, $end )
// {

//     if ( $start > $end ) {
//         return 0;
//     } else {
//         return $start + sumInRange( $start + 1, $end );
//     }

// }

// // Define the range
// $start = 1;
// $end   = 10;

// // Calculate the sum using the recursive function
// $sum = sumInRange( $start, $end );

// echo "Sum of numbers from $start to $end is: $sum";

//9. Write a PHP program to find factorial of a given number using recursion

// function factorial( $n )
// {

//     if ( $n == 0 || $n == 1 ) {
//         return 1;
//     } else {
//         return $n * factorial( $n - 1 );
//     }

// }

// // Example usage:
// $num    = 5; // Change this to the desired number for which you want to calculate the factorial
// $result = factorial( $num );
// echo "The factorial of {$num} is: {$result}";

/*===========================================================================
You can practice the following exercises later, after learning array concepts.
============================================================================*/

//10. Write a PHP program to find sum of digits of a given number using function.

// function sumOfDigits( $number )
// {

//     $sum = 0;
//     // Convert the number to a string to iterate through its digits
//     $numberStr = (string) $number;

// // Loop through each digit and add it to the sum
//     for ( $i = 0; $i < strlen( $numberStr ); $i++ ) {
//         $digit = $numberStr[$i];
//         $sum += (int) $digit;
//     }

//     return $sum;

// }

// $number = 12345; // Change this to the number for which you want to find the sum of digits

// $result = sumOfDigits( $number );

// echo "The sum of digits of $number is: $result";

//11. Write a PHP program to display all array elements using recursion.

// function displayArray( $array )
// {

//     foreach ( $array as $element ) {

//         if ( is_array( $element ) ) {
//             // If the element is an array, recursively call the function
//             displayArray( $element );
//         } else {
//             // If the element is not an array, display it
//             echo "$element\n";
//         }

//     }

// }

// // Example array with nested arrays
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// // Call the function to display all elements
// displayArray( $array );

//12. Write a PHP program to find sum of elements of array using recursion.

// function sumArray( $arr, $index = 0 )
// {

// // Base case: If the index is equal to the array length(That means no element is in the array), return 0
//     if ( $index == count( $arr ) ) {
//         return 0;
//     } else {
//         // Recursive case: Add the current element to the sum of the rest of the array
//         return $arr[$index] + sumArray( $arr, $index + 1 );
//     }

// }

// // Example array
// $array = [1, 2, 3, 4, 5];

// // Call the function to find the sum of elements
// $sum = sumArray( $array );

// echo "The sum of elements in the array is: $sum";
