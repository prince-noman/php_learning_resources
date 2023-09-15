<?php

// The PHP foreach Loop

// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

//Syntax
// $arr = [];
// foreach ($array as $value) {
//     code to be executed;
// }

$colors = array( "red", "green", "blue", "yellow" );

$colors = ["red", "green", "blue", "yellow"];

foreach ( $colors as $value ) {
    echo "$value \n";
}
