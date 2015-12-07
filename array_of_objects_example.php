<?php

require_once('Product.php');

$data = [
    ['Shirt', 'Green', 25.00],
    ['Shirt', 'Red', 28.00],
    ['Shirt', 'Blue', 15.00],
    ['Socks', 'Striped', 3.99],
];

foreach ($data as $key => list($name,$color,$price)) {
    $products[$key] = new Product($name,$color,$price);
    echo $products[$key]->getProduct();
}

var_dump($products);

