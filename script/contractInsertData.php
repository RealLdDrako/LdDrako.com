<?php
@include '../../.htpasswds/config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contracts (orgMember, contractName, contractType, location, locationMoon, startTime, endTime, contractText, contractReward, dateAdded) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssssssssi", $_POST['orgMember'], $_POST['contractName'], $_POST['contractType'], $_POST['location'], $_POST['locationMoon'], $_POST['startTime'], $_POST['endTime'], $_POST['contractText'], $_POST['contractReward']);

// Execute the statement
if ($stmt->execute()) {
  // Redirect to newcontract.php
  header('Location: ../pages/newcontract.php');
  exit;
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
