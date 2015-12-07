<?php

class Customers
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
class Products
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}

$customer = new Customers(12345);
echo $customer->getId() . PHP_EOL;

$product = new Products('ABC');
echo $product->getId() . PHP_EOL;
