<?php

$user="root";
$pwd="";
$db="phpcourse";
//step 1: connect to the database using mysqli
$conn= new mysqli ("127.0.0.1", $user , $pwd , $db);
//step 2: create a query

$sql= "SELECT name FROM language";
//step 3: get the query result (all the rows)
$result =$conn-> query($sql);
echo "<table border>";
//step 4: get each row as an associative array , until there are no more rows

while ($row= $result-> fetch_assoc()){
	//write the contents of the name field
	echo "<tr><td>".$row['name']."</td></tr>";
}
echo"</table>";