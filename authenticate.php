<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user=$_POST["uname"];
	$pass=$_POST["pass"];
	$passs=md5($pass);
	$pass1=substr($passs,0,30);
	$server="localhost";
	$username="root";
	$password="";
	$db="scse";
	$conn=new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql="select username from student where username='$user' and password='$pass1'";
	$result = $conn->query($sql);
	$count=$result->num_rows;
	if ( $count==1) {
		$_SESSION["uid"] = $user;
		header('Location:portal.php');
	}
	else {
		echo "login failed";
	}
	
	$conn->close();
	
}
?>