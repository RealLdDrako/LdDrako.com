<?php
if (isset($_POST['data']) && isset($_POST['filename'])) {
    // Get the data from the post request
    $data = $_POST['data'];
    $filename = $_POST['filename'];

    // Remove "data:image/jpeg;base64," from the data URL
    $data = str_replace('data:image/jpeg;base64,', '', $data);

    // Decode the base64 data
    $data = base64_decode($data);

    // Save the data to a file
    file_put_contents('../images/missions/' . $filename, $data);
    echo 'Image saved successfully.';
} else {
    echo 'No data or filename provided.';
}

if (isset($_POST['pageCount']) && isset($_POST['pagesArray'])) {
    // Get the pageCount and pagesArray from the post request
    $pageCount = $_POST['pageCount'];
    $pagesArray = json_decode($_POST['pagesArray'], true);

    // Prepare an SQL statement
    $stmt = $conn->prepare("UPDATE missions SET pageCount = ?, pagesArray = ? WHERE id = ?");

    // Bind the pageCount, pagesArray, and id to the SQL statement
    $stmt->bind_param("isi", $pageCount, json_encode($pagesArray), $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo 'Data updated successfully.';
    } else {
        echo 'Error: ' . $stmt->error;
    }
}
?>
