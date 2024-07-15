<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$imageFolder = '../images/AroundTheVerse';
$imageFiles = scandir($imageFolder);
$validImageFiles = array_filter($imageFiles, function ($file) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
});
echo json_encode($validImageFiles);
?>
