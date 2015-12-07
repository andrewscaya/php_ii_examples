<?php
// the "..." operator is *only* available in PHP 5.6 and above
// reference: http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list

function unknownParams(...$params)
{
    return var_export($params, TRUE);
}

$a = 'A';
echo unknownParams() . PHP_EOL;
echo unknownParams(1,2,3) . PHP_EOL;
echo unknownParams($a,2,3,4,5) . PHP_EOL;

