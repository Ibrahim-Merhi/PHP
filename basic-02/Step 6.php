<?php
function sum_of_digits($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo "The sum of 12345: ";
echo sum_of_digits("12345")."\n";

?>