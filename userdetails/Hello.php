<?php 
echo "<p> Hello from PHP</p>";

//variables in Php

//all variables start with $
$num1= 1;//an integer
$num2=2.3; // a floating point number

//values of variables are interpolated

echo "<h2> num1 is $num1 and num2 is $num2</h2>";
//all c type operators support (;)

$num1++;
$num2 *=$num1;

echo "<h2> num1 is $num1 and  num2 is $num2";


//assigned to the string
$num1 = "Dev";
echo "<h2> Hello, my name is $num1 </h2>";


//Decision making: if-else and switch
$num= -5;

if($num>4){
	echo"</h3>$num is greater than 4</h3>";
}
 if ($num>0) {
 	echo "<h3> $num is positive";
 	}
 	else{
 		echo "<h3> $num is negative </h3>";

 	}
 
 //LOOP in Php

 	$topWrapper="<html><head></head><body>";
 	$bottomWrapper="</body></html>";
 	echo $topWrapper;

 	$num=0;
 	echo"<h3> while \$num&lt;=5 </h3>"; //while $num<=5

//using while loop
//codition is checked before the body of the loop is entered
 	while ($num<=5){
 		echo"<h3>The number is $num</h3>";
 		$num++;
 	}
 	echo"$num";

 //using do-while loop
 	//condition is checked after the body of the loop is entered
 	$num=0;
 	echo"<h3> do while \$num&lt; 5</h3>";
 	do{
 		echo"<h3> the num is= $num</h3>";
 		$num++;
 	}while($num<5);

 //for-loop in php
 	//for loop(initializer; condition; increment)
 	echo"$num";
 	echo"<h3>for each value of \$num>0,decrement</h3>";
 	for($num; $num>0 ; $num --){
 		echo"<h3> $num</h3>";
 	}

 //an array
 	$numbers=array("one","two","three");
 //for each loop iterates over the values in the array

 	echo"<h3> for each in array(/"one\",/"two\",/"three\")</h3>;

 	foreach($numbers as $number){
 		echo"<h3> $number</h3>";
 	}
echo $bottomWrapper;
 ?>
