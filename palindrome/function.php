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
  echo "Longest palindrome substring is ";
  for($j = $start; $$j <= $end; $j++)
  {
    echo $stringarr[$j];
  }

  exit();

  /* void printLPSS(char *s)
  {
      int maxLength = 1;  // The result (length of LPS)
   
      int start = 0;
      int n = strlen(s);
   
      int low, high;
   
      // One by one consider every character as center point of 
      // even and length palindromes
      for (int i = 1; i < n; ++i)
      {
          // Find the longest odd length palindrome with center 
          // point as i
          low = i - 1;
          high = i + 1;
          while (low >= 0 && high < n && s[low] == s[high])
          {
              if (high - low + 1 > maxLength)
              {
                  start = low;
                  maxLength = high - low + 1;
              }
              --low;
              ++high;
          }
          // Find the longest even length palindrome with no centre point  
          low = i - 1;
          high = i;
          while (low >= 0 && high < n && s[low] == s[high])
          {
              if (high - low + 1 > maxLength)
              {
                  start = low;
                  maxLength = high - low + 1;
              }
              --low;
              ++high;
          }
      }
      //Printing the longest palindromic substring
      int end = start + maxLength - 1; 
      cout<<"Longest palindrome substring is ";
      for( int i = start; i <= end; ++i )
      {
          cout<<s[i];
      }
      cout<<endl;
      //Length of the above longest palindromic substring
      cout<<maxLength<<endl;
   } */

}