<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Now</title>
<style>

body{
background-image:url(bg.jpg);
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;
}

#logo{
height:100px;

}

.header{
width:4700px;
height:100px;
background-color:green;
margin-bottom:50px;
position:fixed;
}

.error {color: #FF0000;}

.footer
{ 
display:inline-block;
width:4350px;
height:95px;
background-color:green;
margin:50px 0px 0px 0px;

}

.middlepara{
font-weight:bold;
}

#pic{
float:right;
max-height:600;
max-width:360;
}
.end{
text-align:center;
}

#w,.check{
font-size:16;
height:20;
width:20;
}

.start{
color:green;
text-align:center;
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

button{
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

button:hover
{	
	background-color: orange;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);	
}

.button:hover, .button:active {
    background-color: orange;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

#first{
text-align:left;
padding:50px 70px 50px 70px;
background-color:#ffffee;
max-width:700px;
max-height:1650px;
border-radius:30px 30px 30px 30px;
font-family:calibri;
font-size:22px;
margin:auto;
margin-top:200px;
}

select,input{
height:40px;
width:250px;
border:none;
font-size:17px;
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

<?php
$Firstname = $Lastname = $email = $gender = $phone = $password = $repassword = $Username = $course = $time = "";
$Firstnameerr = $emailerr = $phoneerr = $passworderr = $repassworderr = $Usernameerr = $courseerr = $timeerr = $message = "";
?>

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
<div id="first"> 
<h1 class="start">Register Now!</h1>
<p class="start"> Please fill in the following details to enroll in our tutorial programme </p>	
<p><span class="error">* required field.</span></p>				
<form method="post" action="insert.php">
<hr>
<img id="pic" src="img1.jpg"></img>
<p class="middlepara">Personal Details*</p>
<select name="gender">
<option value="">Mr.</option>
<option value="">Ms.</option>
</select><br><br>
<input type="text" name="Firstname" required="" placeholder="Your First name">
<span class="error">* <?php echo $Firstnameerr;?></span><br><br>
<input type="text" name="Lastname" required="" placeholder="Your Last name">
 <br><br>
<input type="text" name="Username" required="" placeholder="Please enter a user-name">
<span class="error">* <?php echo $Usernameerr;?></span><br><br> 
<input type="password" name="password" required="" placeholder="Please type a password">
<span class="error">* <?php echo $passworderr;?></span><br><br> 
<input type="password" name="repassword" required="" placeholder="Re-enter password">
<span class="error">* <?php echo $repassworderr;?></span><br><br>
<input type="email" name="email" required="" placeholder="Your E-mail Address"></input>
<span class="error">* <?php echo $emailerr;?></span><br><br>
<input type="tel" name="phone" required="" placeholder="Contact no." ></input>
<span class="error">* <?php echo $phoneerr;?></span><br><br>
<hr>
<p class="middlepara" >Choose a course package</p>
<select id="category" name="course" required=""   >
	<option value="PCM">Physics+Chemistry+Maths</option>
	<option value="PCB">Physics+Chemistry+Biology</option>
	<option value="PCMB">Physics+Chemistry+Maths+Biology</option>
</select>
<span class="error">* <?php echo $courseerr;?></span><br><br>
<hr>
<p class="middlepara" >How would you like to be contacted?</p>
<select id="category3" name="category1">
	<option value="">By Phone</option>
	<option value="">By Email</option>
</select><br><br>
<hr>
<p class="middlepara">Time slot</p>
<select id="category4" name="time" required="">
	<option value="8AM-2PM">8am-2pm</option>
	<option value="3PM-9PM">3pm-9pm</option>
</select>
<span class="error">* <?php echo $timeerr;?></span>
<hr>
<br><br>
<div class="end">
<div id="check"><input id="w" type="checkbox" name="checkbox" checked> I agree to the <a href="#.html">Terms and Conditions</a><br><br></div>
<input class="button" type ="submit" value="Register"><br><br>
<a class="button" href=".html">Back</a><br>


</div>
</div>
<div class=footer>

</div>
</form>
</body>
</html>