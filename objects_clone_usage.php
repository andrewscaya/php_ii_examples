<?php

$today = new DateTime('now');
// gets passed by reference
// which means: $today == $tomorrow
$tomorrow = $today->add(new DateInterval('P1D'));

echo $today->format('l, Y-m-d H:i:s');
echo PHP_EOL;
echo $tomorrow->format('l, Y-m-d H:i:s');
echo PHP_EOL;
var_dump($today, $tomorrow);

// let's try this again with a clone
$today = new DateTime('now');
$tomorrow = clone $today;
// gets passed by reference
// which means: $today == $tomorrow
$tomorrow->add(new DateInterval('P1D'));

echo $today->format('l, Y-m-d H:i:s');
echo PHP_EOL;
echo $tomorrow->format('l, Y-m-d H:i:s');
echo PHP_EOL;
var_dump($today, $tomorrow);
