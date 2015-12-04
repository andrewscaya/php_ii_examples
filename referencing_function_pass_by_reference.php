<?php

function test(&$a, &$b, &$c)
{
    $a++;
    $b *= 2;
    $c *= 3;
    return TRUE;
}

$a = 999;
$b = 999;
$c = 999;
test($a, $b, $c);
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

