<?php
    function calculateTotal($a,$b,$c,$d,$e){
        $sum=$a+$b+$c+$d+$e;
        return $sum;
    }
    function calculatePercentage($x){
        $per=($x/5)*100;
        return $per;
    }
    function calculateResult(){
        $T=func_num_args();
        for($i=0; $i<$T ;$i++){
            if(func_get_args($i) >= 40)
                $sn += func_get_args($i);
            else
                $sn = 0;
        }
        return $sn;
    }
    function calculateDivision($z){
        if ($z >= 75) {
            return "Distinction";
        } elseif ($z >= 60) {
            return "First Division";
        } elseif ($z >= 50) {
            return "Second Division";
        } elseif ($z >= 40) {
            return "Third Division";
        } else {
            return "No Division";
        }
    }
    function breakLine(){
        echo '<br />';
    }
?>