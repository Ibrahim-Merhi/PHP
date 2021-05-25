<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return " * $string * is Palindrome";
  else
	  return " * $string * is not Palindrome";
}
echo check_palindrome('madam')."\n </br>";
echo check_palindrome('like')."\n";
?>