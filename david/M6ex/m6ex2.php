<?php 
require_once('Product.php');

$product = new Product();
$product->name = 'Wiz Bang Pow';
$product->description = 'Wiz Bang Pow is the best Pow on the market!!!';
$product->price = 13.50;
$product->quantity = 25;
$product->save();