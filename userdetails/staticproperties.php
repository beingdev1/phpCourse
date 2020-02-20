<?php
//require "helpers.php";
class Counted {
	public static $_count=0;

function __construct(){

	self:: $_count++;//double column operator used to access static properties of class itself like constant
	//parent clas properties.
	//$this doesnt work with static properties or object of class. the self keyword means "this class"

}
function __destruct(){
	self:: $_count--;
}
}

//pageTop();
function makeObject(){

	$counted= new Counted();
	echo "Instance of counted:".Counted::$_count."<br/>";
	//counted will be be destroyed when it goes out of scope so, static $_count variable will only print 1
echo"Making three instance of counted with makeObject()<br/>";
makeObject();
makeObject();
makeObject();
	echo"outside of a call to make object ,there are".Counted::$_count."instances of Counted<br/>";
	echo"<br/>";
//all objects are in scope, so the $count doesnt incresase
	//garbage collection occurs when the script terminates
	echo "Making\"$count1<br/>";
	$count1= new Counted();
	echo "instances of counted:".Counted::$_count."<br/>";
	echo"<br/>";

}