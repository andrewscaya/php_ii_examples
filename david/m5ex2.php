<?php

require_once('Food.php');

$milk = new Food('milk', 'white', '3.00', 'Dec. 29, 2015');
echo $milk->getProduct();

?>