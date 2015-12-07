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
        return '$' .  number_format( $this->getRawPrice(), 2);
    }

    public function getRawPrice() {
        return ( $this -> price + ( $this -> price * $this -> taxable * $this -> taxRate ) );
    }
}

class MultipleProduct extends Product {
    public function getTotalPrice($quantity) {
        $totalPrice = parent::getRawPrice() * $quantity;
        return '$' .  number_format( $totalPrice, 2);
    }

}

$testProduct = new MultipleProduct( 125.99, true, 0.07 );
echo $testProduct -> getTotalPrice(4) . PHP_EOL;
