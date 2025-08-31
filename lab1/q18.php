<?php
function absoluteDifference($n) {
    $diff = abs($n - 51); 
    if ($n > 51) {
        return 3 * $diff; 
    } else {
        return $diff;
    }
}
$n = 60;
$result = absoluteDifference($n);
echo "Number: $n<br>";
echo "Result: $result";
?>
