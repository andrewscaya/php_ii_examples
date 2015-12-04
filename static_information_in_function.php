<?php
// value of $a is retained between function calls
// BUT ... not between request cycles!

function retain()
{
    static $a;
    $a++;
    return $a;
}

echo date('Y-m-d H:i:s');
echo PHP_EOL;

echo retain();
echo PHP_EOL;

echo retain();
echo PHP_EOL;

echo retain();
echo PHP_EOL;

echo retain();
echo PHP_EOL;

