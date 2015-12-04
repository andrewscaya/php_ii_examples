<?php

$thisIsAglobalVariable = 'GLOBAL';

class Test
{
    public function test()
    {
        return 'TEST';
    }
}

$thisIsAClass = new Test();

var_dump($GLOBALS);
unset($GLOBALS['_SERVER']);
var_dump($_SERVER);
$GLOBALS = array();
echo $thisIsAglobalVariable;
