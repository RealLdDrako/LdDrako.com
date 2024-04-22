<?php
$imageFolder = '../images/AroundTheVerse';
$imageFiles = scandir($imageFolder);
$validImageFiles = array_filter($imageFiles, function ($file) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
});
echo json_encode($validImageFiles);
?>
