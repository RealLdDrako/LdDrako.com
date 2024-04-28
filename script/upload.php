<?php
$allowed_filetypes = array('.jpg','.gif','.png'); // Allowed file types
$max_filesize = 25 * 1024 * 1024; // Maximum filesize in BYTES (currently 25MB)
$upload_path = '../images/AroundTheVerse'; // The place the files will be uploaded to

// Check if we can upload to the specified path
if(!is_writable($upload_path))
  die('You cannot upload to the specified directory, please CHMOD it to 777.');

// Add directory separator to the upload path
$upload_path = rtrim($upload_path, '/') . '/';

// Read the current counter value
$counter_file = 'counter.txt';
if(file_exists($counter_file)) {
  $counter = (int)file_get_contents($counter_file);
} else {
  $counter = 1;
}

// Loop through each file
for($i=0; $i<count($_FILES['files']['name']); $i++) {
  $filename = $_FILES['files']['name'][$i]; // Get the name of the file
  $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename

  // Check if the filetype is allowed
  if(!in_array($ext,$allowed_filetypes))
    die('The file you attempted to upload is not allowed.');

  // Check the filesize
  if(filesize($_FILES['files']['tmp_name'][$i]) > $max_filesize)
    die('The file you attempted to upload is too large.');

  // Generate a new filename
  $new_filename = 'img' . $counter . $ext;

  // Upload the file to your specified path
  if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$upload_path . $new_filename)) {
    echo 'Your file upload was successful, view the file <a href="' . $upload_path . $new_filename . '" title="Your File">here</a>';

    // Increment the counter and save it back to the file
    $counter++;
    file_put_contents($counter_file, $counter);
  } else {
    echo 'There was an error during the file upload. Please try again.';
  }
}
?>
