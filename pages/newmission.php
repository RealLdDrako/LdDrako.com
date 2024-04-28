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
		<link rel="stylesheet" href="../css/site.css" />
		<link rel="stylesheet" href="../css/menu.css" />
		<link rel="stylesheet" href="../css/newmission.css" />
		<script src="../script/upload.js" type="text/javascript"></script>
	</head>
	
	<!--Load SlideShow-->
	<body>
	<div class="topnav">
		<ul>
			<li class="subnav"><a href="http://www.lddrako.com" target="lddrako.com">Home</a></li>
			<li class="subnav">
				<a href="#">Resources</a>
				<ul>
					<li class="subnav">
						<a href="#">Official</a>
						<ul>
							<li><a href="https://status.robertsspaceindustries.com/" target="_blank">Star Citizen Status</a></li>
							<li><a href="https://robertsspaceindustries.com/spectrum/community/SC" target="_blank">CIG Spectrum</a></li>
							<li><a href="https://support.robertsspaceindustries.com/hc/en-us/articles/360003093114-Loaner-Ship-Matrix#:~:text=The%20concept%20of%20%22ship%20loaners%22%20was%20introduced%20to,substitute%22%20for%20the%20ship%20that%20isn%27t%20flight%20ready." target="_blank">Loaner Ship Matrix</a></li>
							<li><a href="https://robertsspaceindustries.com/spectrum/guide" target="_blank">Guide Hub</a></li>
						</ul>
					</li>
					<li class="subnav">
						<a href="#">Tools</a>
						<ul>
							<li><a href="https://verseguide.com/" target="_blank">Verse Guide</a></li>
							<li><a href="https://www.erkul.games/live/calculator" target="_blank">Erkul Calculator</a></li>
							<li><a href="https://hangar.link/" target="_blank">Fleet Viewer</a></li>
							<li><a href="https://sc-trade.tools/home" target="_blank">SC Trade Tools</a></li>
							<li><a href="https://uexcorp.space/" target="_blank">UEX Corp</a></li>
							<li><a href="https://redmonstergaming.com/mining-cheat-sheets/" target="_blank">Red Monster Mining</a></li>
							<li><a href="https://finder.cstone.space/" target="_blank">Cornerstone Item Finder</a></li>
							<li><a href="https://starcitizen.tools/" target="_blank">Star Citizen WIKI</a></li>
							<li><a href="https://snareplan.dolus.eu/" target="_blank">Dolus SnarePlan</a></li>
							<!-- Add more tools links here -->
						</ul>
					</li>
					<li class="subnav">
						<a href="#">Events</a>
						<ul>
							<li><a href="../pages/OverDrive.html" target="_blank">Overdrive Initiative</a></li>
						</ul>
					</li>
					<li><a href="../pages/upload.html" target="_blank">Upload to Around The Verse</a></li>
					<li><a href="../pages/discord.html" target="_blank">Discord</a></li>
				</ul>
			</li>
			<li><a href="#profileCard">Contact</a></li>
		</ul>
	</div>
        <!-- main content to be restructured for navbar improvements -->
<body>
    <div class="watermark">
		<h4>Mission Brief</h4>
	</div>
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
?>

<div class="page">
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
    	<p><?php echo $missionText; ?></p>
	</div>
</div>
	<div class="watermark2">
		<h4>Mission Brief</h4>
	</div>

		<div class="footer">
			<h2>LdDrako.com</h2>
			<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
		</div>
		<script src="../script/missionTemplate.js"></script>
    </body>
</html>