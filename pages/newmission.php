<!DOCTYPE html>
<html>
	<head>
		<title>LdDrako's Den</title>
		<meta charset="UTF-8" />
		<meta name="description" content="LdDrako's Den" />
		<meta name="keywords" content="LdDrako, StarCitizen, Star Citizen" />
		<meta name="author" content="LdDrako" />
		<meta http-equiv="refresh" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/newmission.css" />
		<script src="../script/upload.js" type="text/javascript"></script>
	</head>
	
	<body>
	
<?php

$servername = "localhost";
$username = "LdDrako";
$password = "TFSJQEOkkuo?";
$dbname = "missions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  } else {
	echo "";
  }

$sql = "SELECT * FROM missions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $missionName = $row["missionName"];
    $missionType = $row["missionType"];
    $startTime = $row["startTime"];
    $endTime = $row["endTime"];
    $location = $row["location"];
    $missionText = $row["missionText"];
  }
} else {
  echo "0 results";
}
$conn->close();

$chunks = str_split($missionText, 2400);

foreach ($chunks as $chunk) {
?>
<div class="containerPaper">
    <div class="paper">
		<div class="watermark">
        	<h4>Mission Brief</h4>
    	</div>
        <div class="missionAttribute">
            <span class="missionType"><?php echo $missionType; ?> Mission-------></span>
            <h2 class="missionName"><?php echo $missionName; ?></h2>
            <span class="missionType"><-------<?php echo $missionType; ?> Mission</span>
        </div>
        <div class="missionAttribute">
            <h4>Start Time: <?php echo $startTime; ?>  End Time: <?php echo $endTime; ?></h4>
        </div>
        <div class="missionAttribute">
            <h2><?php echo $location; ?></h2>
        </div>
        <div class="missionText">
            <p><?php echo $chunk; ?></p>
        </div>
		<div class="watermark2">
        	<h4>Mission Brief</h4>
    	</div>
    </div>
    <div class="footer">
        <h2>LdDrako.com</h2>
        <p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
    </div>
</div>
<?php
}
?>
	</body>
</html>