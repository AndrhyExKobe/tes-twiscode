<?php

function palindrome($word)
{

  $n = strlen($word);

  $strarr = str_split($word);

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
    
  return substr($word, $start, $maxLength+$start);

}