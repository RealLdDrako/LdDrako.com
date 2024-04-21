<?php
$allowed_filetypes = array('.jpg','.gif','.png',); // Allowed file types
$max_filesize = 5242880; // Maximum filesize in BYTES (currently 0.5MB)
$upload_path = '../images/AroundVerse'; // The place the files will be uploaded to

$filename = $_FILES['userfile']['name']; // Get the name of the file
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename

// Check if the filetype is allowed
if(!in_array($ext,$allowed_filetypes))
  die('The file you attempted to upload is not allowed.');

// Check the filesize
if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
  die('The file you attempted to upload is too large.');

// Check if we can upload to the specified path
if(!is_writable($upload_path))
  die('You cannot upload to the specified directory, please CHMOD it to 777.');

// Upload the file to your specified path
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
  echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>';
else
  echo 'There was an error during the file upload. Please try again.';
?>
