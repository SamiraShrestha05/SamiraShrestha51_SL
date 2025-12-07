<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle"; 
    public $weight; 


    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000; 
        }
        return $this->weight;
    }


    public function setWeight($weight) {
        $this->weight = $weight;
    }
}



$bike1 = new Bicycle("Giant", "Escape 3", 2021, 12000);
$bike2 = new Bicycle("Trek", "FX 2 Disc", 2020, 13500);



echo "Bike 1 Info: " . $bike1->getInfo() . PHP_EOL;
echo "Bike 1 Weight in KG: " . $bike1->getWeight(true) . " kg" . PHP_EOL;
echo "Bike 1 Weight in grams: " . $bike1->getWeight() . " g" . PHP_EOL;

echo PHP_EOL;

echo "Bike 2 Info: " . $bike2->getInfo() . PHP_EOL;
echo "Bike 2 Weight in KG: " . $bike2->getWeight(true) . " kg" . PHP_EOL;
echo "Bike 2 Weight in grams: " . $bike2->getWeight() . " g" . PHP_EOL;

?>
