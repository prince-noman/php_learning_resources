<?php
// session_name( 'php' );
// session_start();

session_start( [
    'name'            => 'php',
    'cookie_lifetime' => 150,
] );

// var_dump( $_SESSION );

//Session Value Set
// $_SESSION['name'] = 'Prince';
// $_SESSION['age']  = 30;
print_r( $_SESSION );

// $data = [
//     'name' => 'John Doe',
//     'age'  => 30,
//     'city' => 'New York',
// ];
// $data['gender'] = 'Male';
// print_r( $data );

//Session Value Get
echo $_SESSION['name'];

// Session Value Destroy ( destroy the session as well delete session file)
// session_destroy();

// To remove all session variables
// session_unset();
