<?php

class Base
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

class Customers extends Base
{
    // added functionality of some sort here ...
    public $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Products extends Base
{
    // added functionality of some sort here ...
    public $title;
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
echo $customer->getId() . PHP_EOL;
echo $customer->getName() . PHP_EOL;

$product = new Products('ABC');
$product->setTitle('Really Great Product');
echo $product->getId() . PHP_EOL;
echo $product->getTitle() . PHP_EOL;
