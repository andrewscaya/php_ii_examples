<?php
$a = true;
$b = false;

echo ($a||$b?"OK":"");
echo PHP_EOL;

// suggestion:
// #1: use single quotes
// #2: use spacing to improve readability
echo ($a||$b ? 'OK' : '');
