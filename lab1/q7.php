<?php
function calculatePower($v, $c) {
    return $v * $c; 
}
$v = 220; 
$c = 5;  
$p = calculatePower($v, $c);
echo "Voltage: $v V<br>";
echo "Current: $c A<br>";
echo "Power: $p W"; 
?>
 