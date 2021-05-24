<?php

function greaterFn($num){
    if($num<10)
        $string="$num is less than 10";
    elseif($num==10)
    $string="$num is equal to 10";

    elseif($num>40)
    $string="$num is greater than 40";
    elseif($num>30)
    $string="$num is greater than 30";
    elseif($num>20)
    $string="$num is greater than 20";
    elseif($num>10)
    $string="$num is greater than 10";
    
    return $string;
}
$num = greaterFn(30);
echo $num
?>