<?php

class Product
{
    public $name  = '';
    public $color = '';
    public $price = '';

    public function __construct($newName, $newColor, $newPrice)
    {
        $this->name  = $newName;
        $this->color = $newColor;
        $this->price = $newPrice;
    }

    public function getProduct()
    {
        return "Name: \t" . $this->name . PHP_EOL .
               "Color: \t" . $this->color . PHP_EOL .
               "Price: \t$ " . $this->price . PHP_EOL;
    }
}

?>
