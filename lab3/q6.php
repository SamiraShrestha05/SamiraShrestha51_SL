<?php


class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

   
    public function isAdmin() {
        return $this->is_admin;
    }

   
    public function fullName() {
        $full = $this->name . " " . $this->surname;
        if ($this->is_admin) {
            $full .= " (admin)";
        }
        return $full;
    }
}


class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

   
    public function setCity($city) { $this->city = $city; }
    public function setState($state) { $this->state = $state; }
    public function setCountry($country) { $this->country = $country; }

   
    public function getCity() { return $this->city; }
    public function getState() { return $this->state; }
    public function getCountry() { return $this->country; }


    public function location() {
        return "{$this->city}, {$this->state}, {$this->country}";
    }
}


class AdminUser extends User {
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}




$user = new User("Samira", "Shrestha", "samirashrestha");


$customer = new Customer("Jane", "Smith", "janesmith");
$customer->setCity("Los Angeles");
$customer->setState("California");
$customer->setCountry("USA");


$admin = new AdminUser("Admin", "User", "adminuser");


echo "User Full Name: " . $user->fullName() . PHP_EOL;
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . PHP_EOL;
echo PHP_EOL;

echo "Customer Full Name: " . $customer->fullName() . PHP_EOL;
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . PHP_EOL;
echo "Location: " . $customer->location() . PHP_EOL;
echo PHP_EOL;

echo "AdminUser Full Name: " . $admin->fullName() . PHP_EOL;
echo "Is Admin: " . ($admin->isAdmin() ? "Yes" : "No") . PHP_EOL;

?>
