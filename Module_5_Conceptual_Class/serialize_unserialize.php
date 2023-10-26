<?php
$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];
print_r( $data );
$serialized = serialize( $data );
print_r( $serialized );

$unserialized = unserialize( $serialized );

print_r( $unserialized );
