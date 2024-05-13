<?php
header('Content-Type: application/json');

@include '../../.htpasswds/config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the last 6 missions
$query = $conn->query('SELECT * FROM missions ORDER BY id DESC LIMIT 6');
$missions = $query->fetch_all(MYSQLI_ASSOC);

// Prepare array to hold the missions and their images
$missionsArray = [];

foreach ($missions as $mission) {
    // Get the 'filenamesArray' from the mission
    $filenamesArray = explode(',', $mission['filenamesArray']); // Assuming filenames are comma-separated

    // Prepare array to hold the image URLs
    $imageUrls = [];

    foreach ($filenamesArray as $filename) {
        // Assuming that the 'missions' directory is at the root of your website
        $imageUrls[] = '/images/missions/' . $filename;
    }    

    $missionsArray[] = [
        'missionName' => $mission['missionName'],
        'images' => $imageUrls
    ];
}

// Output the missions and their images as a JSON array
echo json_encode($missionsArray);
?>
