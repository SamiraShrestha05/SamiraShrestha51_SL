<?php
function addFrontBack($str) {
    $front = (strlen($str) < 3) ? $str : substr($str, 0, 3);
    return $front . $str . $front;
}
$inputs = ["Python", "JS", "Code"];
foreach ($inputs as $input) {
    $output = addFrontBack($input);
    echo $output . "<br>";
}
?>
