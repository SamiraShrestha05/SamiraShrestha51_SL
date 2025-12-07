<?php


class Student {


    public $name;
    public $surname;
    public $country;

 
    private $tuition = 1000;

    protected $indexNumber = 12345;

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

   
    public function helloWorld() {
        return "Hello World";
    }

 
    protected function helloFamily() {
        return "Hello Family";
    }

   
    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        return $this->tuition;
    }

    
    public function callHelloMe() {
        return $this->helloMe();
    }

    public function showTuition() {
        return $this->getTuition();
    }


    public function callHelloFamily() {
        return $this->helloFamily();
    }
}

class PartTimeStudent extends Student {

   
    public function helloParent() {
       
        return $this->helloFamily();
    }
}


$student = new Student();
$student->name = "Samira";
$student->surname = "Shrestha";
$student->country = "Nepal";

echo "Student Name: " . $student->getName() . PHP_EOL;
echo "Student Surname: " . $student->getSurname() . PHP_EOL;
echo "Hello World: " . $student->helloWorld() . PHP_EOL;
echo "Hello Family (via helper): " . $student->callHelloFamily() . PHP_EOL;
echo "Hello Me (via helper): " . $student->callHelloMe() . PHP_EOL;
echo "Tuition (via helper): " . $student->showTuition() . PHP_EOL;

echo PHP_EOL;


$partTime = new PartTimeStudent();
$partTime->name = "Ram";
$partTime->surname = "Magar";
$partTime->country = "Nepal";

echo "PartTimeStudent Name: " . $partTime->getName() . PHP_EOL;
echo "PartTimeStudent Surname: " . $partTime->getSurname() . PHP_EOL;
echo "Hello World: " . $partTime->helloWorld() . PHP_EOL;
echo "Hello Parent (calling protected method from parent): " . $partTime->helloParent() . PHP_EOL;

?>
