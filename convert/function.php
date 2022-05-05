<?php

function convbindec($num)
{
  $n = $num;
  $decVal = 0;
  $base = 1;
  while ($n > 0)
  {
    $rem = $n % 10;
    $decVal = $decVal + $rem * $base;
    $n = $n / 10 ;
    $base = $base * 2;
  }

  return $decVal;
}

function convdecbin($num)
{
  $n = $num;

  $binary;
  $i = 0;
  while ($n > 0)
  {
    $binary[$i] = $n % 2;
    $n = (int)($n / 2);
    $i++;
  }
  $strbin = '';
  for ($j = $i - 1; $j >= 0; $j--)
    $strbin = $strbin.$binary[$j];

  return $strbin;
}