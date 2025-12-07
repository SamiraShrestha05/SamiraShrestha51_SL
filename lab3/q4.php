<?php

class Product {


    private $description;
    private $quantity;
    private $price;


    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string." . PHP_EOL;
        } else {
            $this->description = $description;
        }

        if (!is_numeric($quantity)) {
            echo "Error: Quantity must be a number." . PHP_EOL;
        } else {
            $this->quantity = $quantity;
        }

        if (!is_numeric($price)) {
            echo "Error: Price must be a number." . PHP_EOL;
        } else {
            $this->price = $price;
        }
    }

   
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string." . PHP_EOL;
        }
    }

   
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number." . PHP_EOL;
        }
    }

    
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number." . PHP_EOL;
        }
    }

   
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}


$product = new Product("Laptop", 3, 120000);


echo "Description: " . $product->getDescription() . PHP_EOL;
echo "Quantity: " . $product->getQuantity() . PHP_EOL;
echo "Price: Rs." . $product->getPrice() . PHP_EOL;


echo "Total Price: Rs." . $product->calculatePrice() . PHP_EOL;

?>
