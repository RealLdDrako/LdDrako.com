<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


@include '../../.htpasswds/config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the data from the POST request
$pageCount = intval($_POST['pageCount']); // Ensure pageCount is an integer
$pagesArray = $_POST['pagesArray'];
$filenamesArray = $_POST['filename']; // Get the filenames array

// Prepare an SQL statement for execution
$stmt = $conn->prepare("UPDATE missions SET pageCount = ?, pagesArray = ?, filenamesArray = ? WHERE id=(SELECT MAX(id) FROM missions)");

// Bind variables to the prepared statement as parameters
$stmt->bind_param("iss", $pageCount, $pagesArray, $filenamesArray);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
