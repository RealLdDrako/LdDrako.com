<?php
@include '../../.htpasswds/config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO missions (orgMember, missionName, missionType, startTime, endTime, location, locationMoon, missionText, dateAdded) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssssssss", $_POST['orgMember'], $_POST['missionName'], $_POST['missionType'], $_POST['startTime'], $_POST['endTime'], $_POST['location'], $_POST['locationMoon'], $_POST['missionText']);

// Execute the statement
if ($stmt->execute()) {
  // Redirect to newmission.php
  header('Location: ../pages/newmission.php');
  exit;
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
