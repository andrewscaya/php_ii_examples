<?php

$a = 10;
$count = 10;

echo "while:\n";
while ($a < $count) {
    echo $a++ . ' ';
    $b = 1;
}
echo $b;
echo PHP_EOL;

echo "do while:\n";
$a = 10;
do {
    echo $a++ . ' ';
    $c = 1;
} while ($a < $count);
echo $c;
echo PHP_EOL;
