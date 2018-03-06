<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>

<style>

body{
background-image:url(bg1.jpg);
background-size:cover;
background-attachment:fixed;
}

.header{
width:1850px;
height:115px;
background-color:green;
display:inline-block;
margin:0px 0px 0px 0px;
position:fixed;
}

.footer
{ 
display:inline-block;
width:4350px;
height:95px;
background-color:green;
margin:50px 0px 0px 0px;

}

#logo{
height:115px;
}
.start{
color:green;
}

.main{

margin:auto;
text-align:center;
padding:20px 50px 20px 50px;
margin-top:250px;
border:groove;
background-color:#ffffcc;
max-width:550px;
max-height:1450px;
border-radius:30px 30px 30px 30px;
font-family:calibri;
font-size:22px;
}

.button:link, .button:visited {
    background-color: blue;
    color: white;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius:10px 10px 10px 10px;
    font-family:calibri;
    font-size:20px ;
}

select,input{
height:40px;
width:250px;
border:none;
font-size:17px;
}

.button:hover, .button:active {
    background-color: orange;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.extra{
margin-top:5px;
padding:10px 5px 10px 5px;
background-color:#ffff80;
border-radius:20px 20px 20px 20px;
}

.tab{
padding-left:30px;
display:inline-block;
width:inherit;
height:40px;
background-color:black;
margin:0px 0px 0px 0px;
font-color:white;
    opacity: 0.7;
    filter: alpha(opacity=70);
}

.topurl:link, .topurl:visited {
    background-color: black;
    height:20px;
    width:150px;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family:calibri;
    font-size:20px ;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.topurl:hover, .topurl:active {
    background-color: orange;
    opacity: 1;
    filter: alpha(opacity=100);
}

li
{
display:inline-block;
}

</style>
</head>

<body>
<div class="header">
<img id="logo" src="logo.jpg"></img> 
<div class="tab">
 <ul>
	<li><a class="topurl" href="">Home</a></li>
	<li><a class="topurl" href="">About us</a></li>
	<li><a class="topurl" href="">Course packages</a></li>
	<li><a class="topurl" href="">Distance learning</a></li>
	<li><a class="topurl" href="">Test Series</a></li>
	<li><a class="topurl" href="">Contact</a></li>
 </ul>
</div><br>
</div><br>
<div class="main">
<h2 class="start">Login to Momentum</h2>
<form action="authenticate.php" method="post">
<input type="text" name="uname" required="" placeholder="User Name"><br><br> 
<input type="password" name="pass" required="" placeholder="Password"><br><br> 
<div class="end">
<input class="button" type="submit" name="login" value="Login"><br><br>
<a class="button" href=".html">Back</a><br><br>
<a style="font-size:16px" href="url.html">Forgot password?</style></a><br>
</div>
<div class="extra">Not registered yet?<br><br>
<a class=button href="signup.php">Register Now!</a></div>
</form>
</div>
</div>
<div class=footer>
<?php

if (!isset($_SESSION['uid']))
{}
else
{
	header('Location:portal.php');
}
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
		$data=mysql_fetch_assoc($result);
		$username=$data['username'];
		$_SESSION['uid']=$username;
		header('Location:portal.php');
	}
	else {
		echo "login failed";
	}
	
	$conn->close();
	
}
?>
</div>
</body>
</html>