<!DOCTYPE html>
<?php

session_start();
?>
<html>
<head>
<style>

table{
	width:80%;
	height:100%;
}
table,td {
    border: 1px solid black;
	border-collapse: collapse;
	font-family:calibri;
	text-align:center;
	font-size:18px;
	background-color:#ffffee;
}

th
{
	border: 1px solid black;
	border-collapse: collapse;
	background-color:green;
	color:white;
	font-family:calibri;
	text-align:center;
	height:30px;
	
}

#k{
	margin-top:100px;
}
h1
{
	font-family:calibri;
	font-size:22px;
	font-weight:bold;
	color:green;
	
}

</style>
</head>
<body>
<div id="k">
<h1>Attendance </h1>
<?php
echo $_SESSION['uid'];
if (isset($_SESSION['uid']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";
$u=$_SESSION['uid'];
echo $u;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date,phy,chy,bio FROM attendance where username='$u'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Date</th><th>Physics</th><th>Chemistry</th><th>Biology</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["phy"]. "</td><td>" . $row["chy"]. "</td><td>" . $row["bio"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
}
?> 
</div>
</body>
</html>