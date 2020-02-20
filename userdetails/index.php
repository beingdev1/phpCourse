






<!DOCTYPE html>
<html>
<head>
	<title>connection to database</title>
</head>
<body>
<form action="insert.php" method="post">
	<p>add a language :<input type="text" name="language"/></p>
	<p><input type="submit" value="submit"></p>
	<p><input type="text"  name="id"></p>
	<p><input type="submit" value="delete"></p>

</form>

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
	
	}



		$sql="SELECT name FROM language ORDER BY name ASC";
		$result= $conn->query($sql);
		echo"<table border>";
		while ($row= $result->fetch_assoc()){
			echo"<tr><td>".$row['name']."</td></tr>";
		}
		echo "</table>";
		
 //header(Location:index.php
		//delete form the table

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$id=$_POST['id'];
	
		    $sql = "DELETE FROM language WHERE id=?";

           if ($conn->query($sql) == TRUE) {
              echo "Record deleted successfully";
            } else {
               echo "Error deleting record: " . $conn->error;
        }
    }