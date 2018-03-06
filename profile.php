<!DOCTYPE html>
<?php

session_start();
?>
<html>
<head>
<style>



#k{
	margin-top:100px;
	margin-left:20px;
	font-family:calibri;
}
h1
{
	font-family:calibri;
	font-size:22px;
	font-weight:bold;
	color:green;
	
}

.button:link, .button:visited {
    background-color: blue;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius:10px 10px 10px 10px;
    font-family:calibri;
    font-size:20px ;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:hover, .button:active {
    background-color: orange;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<body>
<div id="k">
<h1>Profile </h1>
<form method="post">
<?php
if (isset($_SESSION['uid']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";
$u=$_SESSION['uid'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student where username='$u'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  $row["username"]. "<br><br>" . $row["fname"]. "<br><br>"; 
		echo "phone no.: <input type=\"number\" value=\"".$row['phone']."\" name=\"phone\"><br><br>";
		echo "email: <input type=\"email\" value=\"".$row['email']."\" name=\"email\">";
    }
} else {
    echo "0 results";
}

$conn->close();
}
?>
<br><br>
<input class="button" type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$u=$_SESSION['uid'];
	$server="localhost";
	$username="root";
	$password="";
	$db="scse";
	$conn=new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	

		
		$sql1="update student set email='$email' , phone='$phone' where username='$u'";
			if ($conn->query($sql1) === TRUE) {
					echo "your profile is updated succesfully";
				}
			else{
					echo "Error: " . $sql1 . "<br>" . $conn->error;
				}
		
	
	$conn->close();
}
?>
</div>
</body>
</html>