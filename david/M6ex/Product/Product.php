<?php
namespace Product;

class Product
{
    public $name  = '';
    public $description = '';
    public $price = '';
    public $quantity = '';
    public $db;

    public function __construct($newName = NULL ,
                                $newDescription = NULL,
                                $newPrice = NULL,
                                $newQuantity = NULL)
    {
        $this->name  = $newName;
        $this->description = $newDescription;
        $this->price = $newPrice;
        $this->quantity = $newQuantity;
        if ( $this->createConnection() )
        {
            echo 'connected!';
        }
        else
        {
            echo 'not connected';
        }
    }

    public function getProduct()
    {
        return "Name: \t" . $this->name . '<br>' .
        "Description: \t" . $this->description . '<br>'.
        "Price: \t$ " . $this->price . '<br>';
        "Quantity: \t$ " . $this->quantity . '<br>';
    }

    public function save()
    {
        if ( $this->productExists($this->name) )
        {
            echo '<br>product exists';
            $stmt = $this->db->prepare("UPDATE products SET product_name =  ?, description = ?, price = ?, quantity_on_hand = ? WHERE product_name= ?");
            $stmt->execute(array($this->name, $this->description, $this->price, $this->quantity, $this->name));

        }
        else
        {
            echo '<br>product does not exist';
            $stmt = $this->db->prepare("INSERT INTO products (product_name, description,  price, quantity_on_hand) VALUES ( ?, ?, ?, ?)");
            $stmt->execute(array($this->name, $this->description, $this->price, $this->quantity));
        }


    }

    private function createConnection()
    {
        $connection = new Connection();
        $this->db = $connection->getDb();
    }

    private function productExists($productName)
    {
        echo '<br>Product is: ' . $productName;
        $stmt = $this->db->prepare("SELECT * FROM products WHERE product_name = ?");
        $stmt->execute(array($productName));
        return $stmt->fetchColumn() > 0;
    }

}
