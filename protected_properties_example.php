<?php

class Base
{
    // $id MUST be an integer!
    protected $id;
    public function __construct($id)
    {
        $this->setId($id);
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        if (!is_int($id)) {
            throw new Exception('Must be an integer!');
        }
        $this->id = (int) $id;
    }
}

class Customers extends Base
{
    // added functionality of some sort here ...
    protected $name;
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
    protected $title;
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

try {
    $customer = new Customers(12345);
    $customer->setName('Doug');
    echo $customer->getId() . PHP_EOL;
    echo $customer->getName() . PHP_EOL;

    $product = new Products('ABC');
    $product->setTitle('Really Great Product');
    echo $product->getId() . PHP_EOL;
    echo $product->getTitle() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
