<?php
$intVar = 25;
$floatVar = 10.75;
$stringVar = "Hello";
$boolVar = true;
$arrayVar = array("Apple", "Banana", "Orange");
$nullVar = null;
echo "Integer: " . $intVar . "<br>";
print "Float: " . $floatVar . "<br>";
echo "String: " . $stringVar . "<br>";
print "Boolean: " . $boolVar . "<br>"; 
echo "Null: " . $nullVar . "<br>"; 
echo "<hr>";
echo "Array using print_r:<br>";
print_r($arrayVar);
echo "<br><br>";
echo "Array using var_dump:<br>";
var_dump($arrayVar);
echo "<br><br>";
echo "<hr>";
echo "Checking data types:<br>";
echo "Is \$intVar integer? " . (is_int($intVar) ? "Yes" : "No") . "<br>";
echo "Is \$floatVar float? " . (is_float($floatVar) ? "Yes" : "No") . "<br>";
echo "Is \$stringVar string? " . (is_string($stringVar) ? "Yes" : "No") . "<br>";
echo "Is \$boolVar boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "<br>";
echo "Is \$arrayVar array? " . (is_array($arrayVar) ? "Yes" : "No") . "<br>";
echo "Is \$nullVar null? " . (is_null($nullVar) ? "Yes" : "No") . "<br>";
?>
