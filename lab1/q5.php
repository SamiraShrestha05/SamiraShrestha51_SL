<?php
function triangleArea($base, $height) {
    return 0.5 * $base * $height;
}
$base = 10;
$height = 5;
$area = triangleArea($base, $height);
echo "The area of a triangle with base $base and height $height is: $area";
?>
