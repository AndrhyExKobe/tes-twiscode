<?php

function palindrome($word)
{

  $string = str_replace(" ", "", $word);

  $n = strlen($string);

  $strarr = str_split($string);

  if ($n < 2) {
    return $n;
  }

  $maxLength = 1;
  $start=0;

  $low;
  $high;

  for ($i = 0; $i < $n; $i++) {
      $low = $i - 1;
      $high = $i + 1;
      while ( $high < $n && $strarr[$high] == $strarr[$i]){
        $high++;
      } 
    
      while ($low >= 0 && $strarr[$low] == $strarr[$i]){
        $low--;

      }
    
      while ($low >= 0 && $high < $n && $strarr[$low] == $strarr[$high]){
          $low--;
          $high++;
      }

      $length = $high - $low - 1;
      if ($maxLength < $length) {
          $maxLength = $length;
          $start=$low+1;
      }
  }

  return substr($string, $start, $maxLength+$start);

}