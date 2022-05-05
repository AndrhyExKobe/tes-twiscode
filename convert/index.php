<?php

require_once('function.php');

$number = $_POST['number']; /* number to convert */ 
$func = $_POST['function']; /* function convert bindec or decbin */

if ($func == 'bindec') {
  echo convbindec($number);
} else if($func == 'decbin') {
  echo convdecbin($number);
} else {
  echo 'Function Not Found';
}
