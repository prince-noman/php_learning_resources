<?php
$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];

$encoded = json_encode( $data );
print_r( $encoded );

$decoded = json_decode( $encoded, true );
print_r( $decoded['name'] );
