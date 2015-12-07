<?php

class Upper
{
    public $value = 'Zend Training - Building Security into your PHP Applications';

    public function makeArrayUpper($string = NULL)
    {
        $string = $string ?: $this->value;
        $array = explode(' ', $string);
        foreach ($array as $key => $value){
            $value = strtoupper($value);
            $array[$key] = $value;
        };
        return $array;
    }
}

$upper = new Upper();
var_dump($upper->makeArrayUpper());

$upper->value = 'This is a test';
var_dump($upper->makeArrayUpper());

var_dump($upper->makeArrayUpper('This is another test'));
