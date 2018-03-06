<!DOCTYPE html>
<html>
<head>
<style>

table{
	width:60%;
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
	padding:10px 10px 10px 100px;
}
h1
{
	font-family:calibri;
	font-size:28px;
	font-weight:bold;
	color:green;
	
}

h2{
	font-family:calibri;
	font-size:22px;
	font-weight:bold;
	color:blue;
}

</style>
</head>
<body>
<div id="k">
<h1>Grades </h1>

<h2>Physics </h2>
<?php

function grade($x)
{
	if ($x>=90)
	{
		return 'A';
	}
	if ($x>=80 && $x<90)
	{
		return 'B';
	}
	if ($x>=70 && $x<80)
	{
		return 'C';
	}
	if ($x>=60 && $x<70)
	{
		return 'D';
	}
	if ($x>=50 && $x<60)
	{
		return 'E';
	}
	if ($x>=40 && $x<50)
	{
		return 'F';
	}
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";
$u="katkaif";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date,marks FROM physics where username='$u' order by date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Date of Test</th><th>Marks</th><th>Grades</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["marks"]. "</td><td>" .grade($row["marks"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<h2>Chemistry </h2>
<?php
$u="katkaif";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date,marks FROM chemistry where username='$u' order by date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Date of Test</th><th>Marks</th><th>Grades</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["marks"]. "</td><td>" .grade($row["marks"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<h2>Biology </h2>
<?php
$u="katkaif";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT date,marks FROM biology where username='$u' order by date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Date of Test</th><th>Marks</th><th>Grades</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["marks"]. "</td><td>" .grade($row["marks"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</div>
</body>
</html>