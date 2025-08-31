<?php
function recursiveStrLen($str) {
    if ($str === "") {
        return 0;
    } else {
        return 1 + recursiveStrLen(substr($str, 1));
    }
}
$string = "Hello";
$length = recursiveStrLen($string);
echo "The length of '$string' is: $length";
?>
