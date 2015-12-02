<?php 
$array = explode(' ', 'Zend Training - Building Security into your
    PHP Applications');

foreach ($array as $key => $value){
    $value = strtoupper($value);
    $array[$key] = $value;
};
var_dump($array);