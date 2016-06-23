<?php

 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
$histarray = array();
    
 if(isset($argv[1]))
{
  $instring = $argv[1];
}

$inarray = str_split($instring);

foreach($inarray as $ch) {
	if(isset($histarray[$ch]))
	  $histarray[$ch] .= '#';
    else
	  $histarray[$ch] = '#';
	
}

foreach($histarray as $ch => $hist) {
	
	echo " \n " . $ch . ": " . $hist . PHP_EOL;
} 