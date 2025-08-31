<?php
function specialSum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}
$num1 = 10;
$num2 = 10;
$result = specialSum($num1, $num2);
echo "Numbers: $num1 and $num2<br>";
echo "Result: $result";
?>
