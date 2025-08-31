<?php
function carsNeeded($people) {
    $capacity = 5; 
    return ceil($people / $capacity); 
}
$people = 23;
$cars = carsNeeded($people);
echo "Number of people: $people<br>";
echo "Number of cars needed: $cars";
?>
