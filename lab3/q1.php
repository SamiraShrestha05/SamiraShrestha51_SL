<?php

interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {

    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }

    public function getMake() { return $this->make; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }

    public function start() {
        echo "Car started." . PHP_EOL;
    }

    public function displayInfo() {
        echo "Make: {$this->make}" . PHP_EOL;
        echo "Model: {$this->model}" . PHP_EOL;
        echo "Year: {$this->year}" . PHP_EOL;
    }

    public function getDescription() {
        return "This is a car: {$this->make} {$this->model} ({$this->year})";
    }

    public function startEngine() {
        echo "Engine started." . PHP_EOL;
    }

    public function stopEngine() {
        echo "Engine stopped." . PHP_EOL;
    }
}

class ElectricCar extends Car {

    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Electric car is charging..." . PHP_EOL;
    }

    public function getDescription() {
        return "Electric Car: {$this->getMake()} {$this->getModel()} ({$this->getYear()}), Battery: {$this->batteryCapacity} kWh";
    }
}

$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->startEngine();
$car->displayInfo();
echo $car->getDescription() . PHP_EOL;
$car->stopEngine();

echo PHP_EOL;

$eCar = new ElectricCar("Tesla", "Model S", 2023, 100);
$eCar->start();
$eCar->charge();
echo $eCar->getDescription() . PHP_EOL;

?>
