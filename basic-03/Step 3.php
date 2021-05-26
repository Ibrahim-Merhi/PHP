<?php
function wordInText($text, $word){
    $array = explode(" ", $text);
    $i=0;
    $count = 0;
    while($i<count($array)){
        if ($array[$i] == $word){
            $count = $count + 1;
            $i++;
        }
        else{
            $i++;
        }

    }
    return $count;
}
?>