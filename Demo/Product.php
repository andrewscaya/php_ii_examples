<?php
namespace Demo;

// Define Product class
class Product
{

    public $someProperty = 'some property';

    public function calc() {
        return $this->qty_oh * $this->cost;
    }

}

