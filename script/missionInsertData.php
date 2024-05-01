<?php
$servername = "localhost";
$username = "LdDrako";
$password = "TFSJQEOkkuo?";
$dbname = "missions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO missions (missionName, missionType, startTime, endTime, location, missionText)
VALUES ('".$_POST['missionName']."', '".$_POST['missionType']."', '".$_POST['startTime']."', '".$_POST['endTime']."', '".$_POST['location']."', '".$_POST['missionText']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo " <br><button onclick=\"location.href='../pages/newmission.php'\">Go to New Mission</button>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
