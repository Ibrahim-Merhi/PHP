<?php
function reverse($str){
    $length = strlen($str);
    for ($i = ($length - 1); $i>=0; $i--){
        echo $str[$i];
    }
}
reverse ("Baraa");
?>