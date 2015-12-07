<?php

function makeArrayUpper(&$arrayToConvert = NULL) {

    if ($arrayToConvert && is_array($arrayToConvert))
    {
        foreach ($arrayToConvert as $key => $value)
        {
            $arrayToConvert[$key] = strtoupper($value);
        }

        return true;
    }

    return false;
}

$array = explode(' ', 'Zend Training - Building Security into your PHP Applications');
//$array = array();

echo "LOWER CASE ARRAY: ";
var_dump($array);
$trueOrFalse = makeArrayUpper($array);
echo "<br><br>";

echo "UPPER CASE ARRAY: ";
var_dump($array);
echo "<br><br>";

echo "True or False is: <br>";
var_dump($trueOrFalse);
echo "<br><br>";

$trueOrFalse = makeArrayUpper();
echo "True or False is: <br>";
var_dump($trueOrFalse);

?>
