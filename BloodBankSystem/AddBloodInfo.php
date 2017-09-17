 <?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "BloodBank";

$BloodGroup = $_POST['BloodGroup'];
$Quantity = $_POST['Quantity'];
$UserName = $_SESSION['login_user'];
$HospitalName;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT HospitalName FROM HospitalRegistration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $HospitalName = $row["HospitalName"];
    }
} else {
    echo "0 results";

$sql = "INSERT INTO BloodSampleInfo (UserName,HospitalName,BloodGroup,Quantity)
VALUES ('$UserName', '$HospitalName', '$BloodGroup','$Quantity')";

if ($conn->query($sql) === TRUE) {
    header("Location: HospitalDashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
