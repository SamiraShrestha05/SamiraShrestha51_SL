<?php
function addLastChar($str) {
    $lastChar = substr($str, -1); 
    return $lastChar . $str . $lastChar; 
}
$inputs = ["Red", "Green", "1"];
foreach ($inputs as $input) {
    $output = addLastChar($input);
    echo $output . "<br>";
}
?>
