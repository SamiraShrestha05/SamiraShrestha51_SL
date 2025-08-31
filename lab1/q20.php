<?php
function frontCopy($str) {
    if (strlen($str) < 2) {
        return $str; 
    } else {
        $front = substr($str, 0, 2); 
        return str_repeat($front, 4); 
    }
}
$inputs = ["C Sharp", "JS", "a"];
foreach ($inputs as $input) {
    $output = frontCopy($input);
    echo $output . "<br>";
}
?>
