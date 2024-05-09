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
    file_put_contents('../images/missions' . $filename, $data);
    echo 'Image saved successfully.';
} else {
    echo 'No data or filename provided.';
}
?>
