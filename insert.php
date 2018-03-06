<?php

$pass="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Firstname"])) {
    $Firstnameerr = "Name is required";
  } else {
    $Firstname = test_input($_POST["Firstname"]);
  }
  if (empty($_POST["Lastname"])) {
    $Lastname = "";
  } else {
    $Lastname = test_input($_POST["Lastname"]);
  }
  
  
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phoneerr = "Contact no. required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["password"])) {
    $passworderr = "Please enter a password";
  } else {
    $password = test_input($_POST["password"]);
	$pass=md5($password);
  }
  if (empty($_POST["repassword"])) {
    $repassworderr = "Please re-enter password";
  }
  else {
    $repassword = test_input($_POST["repassword"]);
	if ($repassword==$password)
	{}
	else{
		$message="Passwords do not match. Re-enter passwords";
		echo $message;
	}	
  }
  
  if (empty($_POST["course"])) {
    $courseerr = "Please select a course package";
  } else {
    $course = test_input($_POST["course"]);
  }
  
  if (empty($_POST["time"])) {
    $phoneerr = "Please select a time slot";
  } else {
    $time = test_input($_POST["time"]);
  }
  if (empty($_POST["Username"])) {
    $Usernameerr = "Enter a User name";
  } else {
    $Username = test_input($_POST["Username"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO student VALUES ('".$Username."','".$Firstname."','".$Lastname."','".$pass."','".$email."','".$phone."','".$course."','".$time."');";

if ($conn->query($sql) === TRUE) {
    echo "Signed up successfully";
	header('Location:portal.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
