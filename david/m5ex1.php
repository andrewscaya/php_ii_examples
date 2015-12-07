<?php

require_once('Product.php');

$product = new Product('Shirt', 'Green', '25.00');
echo $product->getProduct();

?>