<?php 
require ("helpers.php");
pageTop();
echo pageTop();

$greeting="hello";
$say_bye="have a nice day";
echo"<p>\"$greeting\" has".strlen($greeting)."characters</p>";
//str_word_count :returns the number of words in a string

echo"<p>\"$say_bye\"has".str_word_count($say_bye)."words</p>";
//str rev :reverse a string

echo "<p>\"$greeting\" backwards is \"".strrev($greeting)."\"</p>";

function WriteBold($str){
	
	echo"<b> $str </b>";

}
//function has no parameter
 function WriteTopWrapper(){

 echo"<html><head> </head><body>";
 }

 //functions can also return a value

 function add($a , $b){
  return $a + $b;
 }
 //calling functions
 WriteTopWrapper();
 echo"<p>";
 WriteBold("This text is Bold");
 echo"</p><p> This text is not Bold</p>";

 echo "<p> The sum of 3 and 5 is ".add(3,5). "</p>";
 WriteBold ("<p> The sum of -2 and 9 is".add(-2,9)."</p>");