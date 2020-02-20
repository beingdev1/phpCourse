<!DOCTYPE html>
<html>
<head>
	<title> Facebook</title>
</head>
<body>

<form  action="insert.php" method="post">
	<p>
First Name:<p>
	<input type="text"  name="firstname"></p>
Last Name:<p>
<input type="text" name="lastname"></p>
Email:<p> 
	<input type="text" name="email"></p>
Re-Enter Email:<p>
<input type="text" name="re-email"></p>
Password:<p>
<input type="password" name="password"></p>
<p>
<input type="date" name="date" value="dd/mm/yy"></p>
<input type="submit" value="Create an account">
<br/> 
</form>
<?php
//connect to the database
$user="root";
$pwd="";
$db="test";

$conn=new mysqli ("127.0.0.1", $user, $pwd , $db);
if($_SERVER['REQUEST_METHOD']=='POST')(
$userdetails=$_POST['userdetails'];
$sql="INSERT INTO userdetails VALUES ('$userdetails')";
if ($conn->query($sql)!==TRUE){
		echo"Eroor:".$sql."<br>".$conn->error;
}
)
$sql="SELECT * FROM userdetails";
$result=$conn->query($sql);
echo"<table border>";
while ($row=$result->fetch_assoc()){
	echo"<tr><td>".$row['firstname']."</td></tr>";
}
echo"</table>";
?> 
</body>
</html>