<?php
function largestNumber($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}
$num1 = 15;
$num2 = 42;
$num3 = 27;
$largest = largestNumber($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is: $largest";
?>
