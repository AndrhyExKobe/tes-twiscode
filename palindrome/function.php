<?php

function palindrome($word)
{

  $string = $word;
 
  //remove all spaces
  $string = str_replace(' ','', $string);
  
  //remove special characters
  $string = preg_replace('/[^A-Za-z0-9\-]/','', $string);
  
  $stringarr = str_split($string);

  $maxlength = 1;

  $start = 0;

  $n = strlen($string);

  $low;
  $high;

  for ($i=0; $i < $n; $i++) { 
    $low = $i - 1;
    $high = $i + 1;
    while ($low >= 0 && $high < $n && $stringarr[$low] == $stringarr[$high]) {
      if ($high - $low + 1 > $maxlength) {
        $start = $low;
        $maxlength = $high - $low + 1;
      }
      $low--;
      $high++;
    }
    $low = $i - 1;
    $high = $i;
    while ($low >= 0 && $high < $n && $stringarr[$low] == $stringarr[$high]) {
      if ($high - $low + 1 > $maxlength) {
        $start = $low;
        $maxlength = $high - $low + 1;
      }
      $low--;
      $high++;
    }
  }

  $end = $start + $maxlength - 1; 
  
  for($j = $start; $$j <= $end; $j++)
  {
    $out = array_key_exists($stringarr[$j]) ? $stringarr[$j]:'';
    echo $out;
  }


}