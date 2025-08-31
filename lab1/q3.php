<?php
function minutesToSeconds($m) {
    return $m * 60;
}
$m = 5;
$s = minutesToSeconds($m);
echo "$m minute(s) = $s seconds";
?>
