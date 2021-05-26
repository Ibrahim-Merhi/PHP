<?php
function factorial($num){
    $n = $num;
    $f = 1;
    while ($n >= 1){
        $f = $f * $n;
        $n--;
    }
    return "The factorial of " . $num . " is " . $f;
}

echo factorial(6);


?>