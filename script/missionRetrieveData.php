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
?>

<div class="body">
	<h1>Mission Brief</h1>
</div>
<div>
	<h2 id="missionName"><?php echo $missionName; ?></h2><br>
</div>
<div>
	<h2 id="missionType"><?php echo $missionType; ?></h2>
</div>
<div>
	<h2 id="startTime"><?php echo $startTime; ?></h2>
</div>
<div>
	<h2 id="endTime"><?php echo $endTime; ?></h2>
</div>
<div>
	<h2 id="location"><?php echo $location; ?></h2>
</div>
<div>
	<p id="missionText"><?php echo $missionText; ?></p>
</div>
