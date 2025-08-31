<?php
function isDivisibleByFive($number) {
    return $number % 5 === 0;
}
$num = 25;
if (isDivisibleByFive($num)) {
    echo "$num is divisible by 5.";
} else {
    echo "$num is NOT divisible by 5.";
}
?>
