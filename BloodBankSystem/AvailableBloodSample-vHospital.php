<!DOCTYPE html>
<html>
<title>View Requests</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Menu</h1>
  <a href="AddBloodInfo.html" class="w3-bar-item w3-button">Add Blood Information</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
</nav>

<!-- Header-->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
    <h1 class="w3-xxxlarge w3-animate-bottom">Blood Bank System</h1>
    <div class="w3-padding-16">
    </div>
  </div>
</header>


<br>
<div class="w3-row-padding">

<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "BloodBank";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT HospitalName, BloodGroup, Quantity FROM BloodSampleInfo";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["HospitalName"]. " " . $row["BloodGroup"]." ".$row["Quantity"]. "<br>";
    }
} else {
    echo "0 results";
}
	

$conn->close();
?> 

</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-15">
  <h3></h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>

</body>
</html>

