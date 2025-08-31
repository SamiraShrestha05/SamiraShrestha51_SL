<?php
function compareStringLength($str1, $str2) {
    return strlen($str1) === strlen($str2);
}
$string1 = "Hello";
$string2 = "World";

if (compareStringLength($string1, $string2)) {
    echo "The strings '$string1' and '$string2' have equal length.";
} else {
    echo "The strings '$string1' and '$string2' do NOT have equal length.";
}
?>
