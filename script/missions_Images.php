<?php
header('Content-Type: application/json');

function getMostRecentFiles($dir, $limit) {
    $files = array_map(function ($file) use ($dir) {
        return [
            'file' => $file,
            'time' => filemtime($dir . '/' . $file)
        ];
    }, array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), ['..', '.']));

    usort($files, function ($a, $b) {
        return $b['time'] - $a['time'];
    });

    return array_slice($files, 0, $limit);
}

$files = getMostRecentFiles('../images/missions', 10);

// Prepare array to hold the image URLs
$imageUrls = [];

foreach ($files as $file) {
    // Assuming that the 'missions' directory is in the same directory as this script
    $imageUrls[] = '../images/missions/' . $file['file'];
}

// Output the image URLs as a JSON array
echo json_encode($imageUrls);
?>
