<?php
$array = explode(' ', 'Zend Training - Building Security into your
    PHP Applications');

function makeArrayUpper(&$array)
{
    foreach ($array as $key => $value){
        $value = strtoupper($value);
        $array[$key] = $value;
    };
}

makeArrayUpper($array);
var_dump($array);
