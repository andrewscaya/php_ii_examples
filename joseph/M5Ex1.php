<?php

class Product {
	public $price = 0;
	public $taxable = 0;
	public $taxRate = 0;
	
	function __construct( $price, $taxable = false, $taxRate = 0 ) {
		$this -> price = $price;
		$this -> taxable = $taxable;
		$this -> taxRate = $taxRate;
	}
	
	public function getTotalPrice() {
		$totalPrice = ( $this -> price + ( $this -> price * $this -> taxable * $this -> taxRate ) );
		return '$' .  number_format( $totalPrice, 2);
	}
}

$testProduct = new Product( 125.99, true, 0.07 );
echo $testProduct -> getTotalPrice() . PHP_EOL;