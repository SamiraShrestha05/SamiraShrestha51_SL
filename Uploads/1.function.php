<?php
include_once "library.php";
breakLine();
welcomeMessage('Hari');
breakLine();
welcomeMessage('Shyam');
breakLine();
breakLine();
calculateTotal(45,78);
breakLine();
calculateTotal(45);
breakLine();
$a=  calculateDynamicSum(45,87,9,13);
echo $a;
breakLine();
echo calculateDynamicSum(45,87,9,13,56,7,5,3,2);
?>