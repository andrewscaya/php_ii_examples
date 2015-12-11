<?php
namespace MyEcommerce;
class Product {
	public function __construct($id=null) {
		echo 'The ID of this product is ' . $id . PHP_EOL;
	}
}
