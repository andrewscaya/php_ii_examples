<?php
require_once('Product.php');

class Food extends Product 
{
	public $expiration = '';

	public function __construct($newName, $newColor, $newPrice, $newExpiration)
	{
		parent::__construct($newName, $newColor, $newPrice);
		$this->expiration = $newExpiration;
	}

	public function getProduct()
	{
		return parent::getProduct() .
		       "Expiration Date: " . $this->expiration;
	}
}
?>