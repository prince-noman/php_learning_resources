<?php

//Set Cookie
$name  = 'name';
$value = 'Prince';
setcookie( $name, $value, time() + 150 );

// Get Cookie
echo $_COOKIE[$name];

$data = [
    'name' => 'John Doe',
    'age'  => 30,
];

//Setting Multiple Data in Cookie as JSON
setcookie( 'data', json_encode( $data ), time() + 300 );

//Getting Value From Multiple Cookie Data
$data1 = json_decode( $_COOKIE['data'], true );
print_r( $data1['name'] );

// Destroy Cookie
// setcookie( $name, $value, time() - 150 );
