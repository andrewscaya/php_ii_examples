<?php

$a = [1, 2, 3, 4, 5];
$b = [1, 2, 3, 4, 5];
$c = array_merge($a, $b);
var_dump($c);
echo PHP_EOL;

$a = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$b = ['c' => 33, 'd' => 44, 'e' => 55, 'f' => 11, 'g' => 22, ];
$c = array_merge($a, $b);
var_dump($c);
