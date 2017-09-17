 <?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "BloodBank";
$ReceiverName = $_POST['ReceiverName'];
$ReceiverAddress = $_POST['ReceiverAddress'];
$ReceiverContact = $_POST['ReceiverContact'];
$ReceiverEmail = $_POST['ReceiverEmail'];
$BloodType = $_POST['BloodType '];
$UserName = $_POST['UserName'];
$password = $_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ReceiverRegistration (ReceiverName,ReceiverAddress,ReceiverContact,ReceiverEmail,BloodType,UserName,password )
VALUES ('$ReceiverName', '$ReceiverAddress', '$ReceiverContact','$ReceiverEmail','$BloodType','$UserName','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

