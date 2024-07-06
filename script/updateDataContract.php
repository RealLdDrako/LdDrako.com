<?php
@include 'config.php';
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
$stmt = $conn->prepare("UPDATE contracts SET pageCount = ?, pagesArray = ?, filenamesArray = ? WHERE id=(SELECT MAX(id) FROM contracts)");

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

// Check if file was uploaded
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
      
    $extensions= array("jpeg","jpg","png");
      
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
      
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../images/contracts/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}
?>
