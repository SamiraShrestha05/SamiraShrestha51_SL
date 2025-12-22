<?php
function lastThreeUpper($str) {
    $length = strlen($str);

    if ($length < 3) {
        return strtoupper($str);
    }

    $front = substr($str, 0, $length - 3);
    $lastThree = substr($str, -3);

    return $front . strtoupper($lastThree);
}

$inputs = ["Nepal", "Npl", "Bca", "Bachelor"];
foreach ($inputs as $input) {
    echo lastThreeUpper($input) . "<br>";
}
?>
