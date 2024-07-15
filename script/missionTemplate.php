<?php
@include 'config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO missions (missionName, missionType, startTime, endTime, location, missionText)
VALUES ('".$_POST['missionName']."', '".$_POST['missionType']."', '".$_POST['startTime']."', '".$_POST['endTime']."', '".$_POST['location']."', '".$_POST['missionText']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

