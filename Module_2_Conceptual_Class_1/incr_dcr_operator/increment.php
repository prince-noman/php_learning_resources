<?php

$x = 1;
$y = 1;

echo $x . PHP_EOL;
echo $x++ . PHP_EOL;
echo $x . PHP_EOL;
echo $y . PHP_EOL;
echo ++$y . PHP_EOL;
echo $y . PHP_EOL;

$a = 2;
// Both are same
$a = $a + 3;
//or
$a += 3;
echo $a . PHP_EOL;
