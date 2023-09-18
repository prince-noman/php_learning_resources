<?php

//PHP BREAK

for ( $x = 0; $x < 10; $x++ ) {

    if ( $x == 4 ) {
        break; // Stop the loop
    }

    echo "The number is: $x \n";
}

//PHP CONTINUE

for ( $x = 0; $x < 10; $x++ ) {
    if ( $x == 4 ) {
        continue; // Skip to the next iteration
    }

    echo "The number is: $x \n";
}
