<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "BloodBank";

$UserName = $_POST['UserName'];
$password = $_POST['password'];
$LoginType = $_POST['LoginType'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


         
if($LoginType == 'H')
{	
         $sql = "SELECT * FROM HospitalRegistration WHERE UserName = '$UserName' and password = '$password'";
      $result = mysqli_query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
	if($count == 1) {
	session_register("UserName");
         $_SESSION['login_user'] = $UserName;
         header("location: AvailableBloodSample-vHospital.php");
      }


	else 
	{
         $error = "Your Login Name or Password is invalid";
      	}
}
else
{
$sql = "SELECT * FROM ReceiverRegistration WHERE UserName = '$UserName' and password = '$password'";
      $result = mysqli_query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
	if($count == 1) {
	session_register("UserName");
         $_SESSION['login_user'] = $UserName;
         header("location: AvailableBloodSample.php");
      }
	else 
	{
         $error = "Your Login Name or Password is invalid";
      	}


}
	

$conn->close();
?> 
