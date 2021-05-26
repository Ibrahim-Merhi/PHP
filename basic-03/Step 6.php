<?php

$nb=7;
for($i=1;$i<=$nb;$i++){
    for($j=1;$j<=$nb;$j++){
        if($i==$j||$i==1||$i==$nb){

        echo "*";
        }else echo "&nbsp;&nbsp;";
    }
    echo "<br/>";
}


?>