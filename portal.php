<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>momentum</title>

<style>

body{

}

.header{
width:100%;
height:140px;
background-color:green;
display:inline-block;
margin:0px 0px 0px 0px;
position:fixed;
}

#profile{
float:right;
color:white;
}

.footer
{ 
display:inline-block;
width:100%;
height:95px;
background-color:green;
margin:50px 0px 0px 0px;

}

#logo{
height:100px;
}



.start{
color:green;
}


#main{
text-align:center;
padding:20px 20px 20px 20px;
border:none;
max-width:100%;
max-height:100%;
font-family:calibri;
font-size:22px;
margin-top:150px;
margin-left:200px;
}

.button:link, .button:visited {
    background-color: blue;
    height:20px;
    width:150px;
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

.side{
background-color:#ffffee;
margin:124px 0px 0px 0px;
border:none;
height:100%;
max-width:200px;
float:left;
padding:10px 10px 10px 10px;
position:fixed;
}

select,input{
height:40px;
width:250px;
border:none;
font-size:17px;
}

.button:hover, .button:active {
    background-color: orange;
}

.tab{
padding-left:180px;
display:inline-block;
width:inherit;
height:40px;
background-color:black;
margin:0px 0px 0px 0px;
font-color:white;
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
}


.topurl:hover, .topurl:active {
    background-color: orange;
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
<div id="profile">
profile:<br>
<?php
echo $_SESSION['uid'];
?>
</div>
<div class="tab">
 <ul>
	<li><a class="topurl" href="">Home</a></li>
	<li><a class="topurl" href="">Courses</a></li>
	<li><a class="topurl" href="material.php" target="iframe">Study Material</a></li>
	<li><a class="topurl" href="">Contact</a></li>
 </ul>
</div><br>
</div><br>

<div class="side">
<a class="button" href="login.php" target="iframe">Recent Events</a><hr>
<a class="button" href="attendance.php" target="iframe">Attendance</a><hr>
<a class="button" href="hjk.html" target="iframe">Timetable</a><hr>
<a class="button" href="grades.php" target="iframe">Grades</a><hr>
</div>
<div id="main">
<iframe width="1140" height="1300" src="welcome.html" name="iframe">
</iframe>
</div>
<div class=footer>

</div>
</body>
</html>