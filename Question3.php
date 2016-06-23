<?php
require_once('./Brackets.php');

 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
//const instring = "{}";  //BALANCED

//const instring = "{}}{){[()]}";  //NOT BALANCED
//const instring = "{}{){[()]}";   //NOT BALANCED
//const instring = "{}(){[()]}";   //BALANCED
//const instring = "{}]}";         //NOT BALANCED


 $inarray = str_split(instring);
$result = Brackets::isEven($inarray);

if($result)
	echo " \n The Brackets are Balanced \n";
else
	echo " \n The Brackets are NOT Balanced \n";
