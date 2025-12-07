<?php


interface Shape {
    public function calculateArea();
}


class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }


    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

   
    public function calculateArea() {
        return pi() * pow($this->radius, 2); 
    }
}


class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

 
    public function getSide() {
        return $this->side;
    }

    public function setSide($side) {
        $this->side = $side;
    }

    
    public function calculateArea() {
        return pow($this->side, 2);
    }
}


$circle = new Circle(5);
echo "Circle Radius: " . $circle->getRadius() . PHP_EOL;
echo "Circle Area: " . $circle->calculateArea() . PHP_EOL . PHP_EOL;

$square = new Square(4);
echo "Square Side: " . $square->getSide() . PHP_EOL;
echo "Square Area: " . $square->calculateArea() . PHP_EOL;

?>
