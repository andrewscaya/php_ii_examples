<?php
// in PHP 5.6+ you can use "..." to indicate a variable number of params
// $numbers, in this example, is read as an array
// in php 5.5 and below, use func_get_args()

function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo PHP_VERSION;
echo PHP_EOL;
echo sum(1, 2, 3, 4);
