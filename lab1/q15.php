<?php
function getValueByIndex($array, $index) {
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return null; 
    }
}
$fruits = ["Apple", "Banana", "Orange", "Mango"];
$index = 2;
$value = getValueByIndex($fruits, $index);
if ($value !== null) {
    echo "The value at index $index is: $value";
} else {
    echo "Invalid index: $index";
}
?>
