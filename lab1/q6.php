<?php
function ageInDays($years) {
    return $years * 365; 
}
$ageYears = 20;
$ageDays = ageInDays($ageYears);
echo "Age in years: $ageYears<br>";
echo "Age in days: $ageDays";
?>
