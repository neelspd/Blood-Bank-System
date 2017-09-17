 <?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "BloodBank";
$HospitalName = $_POST['HospitalName'];
$HospitalAddress = $_POST['HospitalAddress'];
$HospitalContact = $_POST['HospitalContact'];
$Hospitalemail = $_POST['Hospitalemail'];
$UserName = $_POST['UserName'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO HospitalRegistration (HospitalName,HospitalAddress,HospitalContact,Hospitalemail,UserName,password)
VALUES ('$HospitalName', '$HospitalAddress', '$HospitalContact','$Hospitalemail','$UserName','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
