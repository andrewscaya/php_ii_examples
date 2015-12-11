<?php
include __DIR__ . '/autoload.php.';

use MyEcommerce\Product as EProduct;
use FastMath\Product as FProduct;

$storeProduct = new EProduct(1954);
$numericProduct = new FProduct(234,18);
