<?php
function findStringIndex($array, $search) {
    $index = array_search($search, $array); 
    if ($index !== false) {
    $result = $index;
    } else {
    $result = -1;
    }
    return $result;
}
$fruits = ["Apple", "Banana", "Orange", "Mango"];
$searchFruit = "Orange";
$index = findStringIndex($fruits, $searchFruit);
if ($index !== -1) {
    echo "$searchFruit found at index $index.";
} else {
    echo "$searchFruit not found in the array.";
}
?>
