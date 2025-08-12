<?php
// function welcomeMessage(){
// echo "Hello User, Welcome to our application";
// }
//define function with parameter

// function calculateTotal(){
// $a = 67;
// $b = 56;
// echo $a+$b;
// }


// function calculateTotal($a,$b){
// echo $a+$b;
// }

function welcomeMessage($user){
echo "Hello <strong>$user</strong> ,
Welcome to our application";
}
function calculateTotal() {
$b = 0;
$a = func_get_arg(0);
if(func_num_args() > 1){
$b = func_get_arg(1);
}
echo $a +$b;
}
function breakLine(){
echo '<br />';
}
function calculateDynamicSum(){
$total_arguments = func_num_args();
$sum = 0;
for ($i=0; $i < $total_arguments; $i++) {
$sum += func_get_arg($i);
}
return $sum;
}
?>


