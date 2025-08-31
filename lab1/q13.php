<?php
function calculateArea($base, $height, $shape) {
    if ($shape === "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape === "parallelogram") {
        return $base * $height;
    } else {
        return "Invalid shape"; 
    }
}
$base = 10;
$height = 5;
$triangleArea = calculateArea($base, $height, "triangle");
$parallelogramArea = calculateArea($base, $height, "parallelogram");
echo "Area of triangle: $triangleArea<br>";
echo "Area of parallelogram: $parallelogramArea";
?>
