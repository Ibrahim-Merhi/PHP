<?php
function my_sqrt($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return "The Square root of $n is $x";
}
print_r(my_sqrt(4)."\n </br>");
print_r(my_sqrt(8)."\n");
?>