<?php
	//connect to database
	$user="root";
	$pwd="";
	$db="phpcourse";
	//step 1:connection to the database
	$conn= new mysqli ("127.0.0.1", $user , $pwd , $db);
	//if there is POST data , insert it into the database 
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$language= $_POST['language'];
		$sql="INSERT INTO LANGUAGE(name) VALUES ('$language')";
		//make sure the query is valid or log the error

		if ($conn->query($sql)!==TRUE){

			echo("Error :".$sql."<br>".$conn->error);
		}
	header('Location:index.php');
	}
