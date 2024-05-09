<!DOCTYPE html>
<html>
	<head>
		<title>LdDrako's Mission Builder</title>
		<meta charset="UTF-8" />
		<meta name="description" content="LdDrako's Den" />
		<meta name="keywords" content="LdDrako, StarCitizen, Star Citizen, Mission Builder" />
		<meta name="author" content="LdDrako" />
		<meta http-equiv="refresh" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/newmission.css" />
	</head>
<body>
    
<button onclick="takeScreenshot()">Save as JPG</button>
	
<?php
@include '../../.htpasswds/config.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM missions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$orgM = $row["orgMember"];
		$missionName = $row["missionName"];
		$missionType = $row["missionType"];
		$startTime = formatDate($row["startTime"]);
		$endTime = formatDate($row["endTime"]);
		$location = $row["location"];
		$locationMoon = $row["locationMoon"];
		$missionText = $row["missionText"];
	}
} else {
	echo "0 results";
}
$conn->close();

$missionTextLength = strlen($missionText);
$numFullPages = floor($missionTextLength / 1200);
$isLastPageShort = ($missionTextLength % 1200) <= 900;

// Define the image source based on the value of orgM
$imageSrc = "";
switch ($orgM) {
	case "drako":
		$imageSrc = "../images/militaryPaperDrako.png";
		break;
	case "joker":
		$imageSrc = "../images/militaryPaperJoker.png";
		break;
	case "pharo":
		$imageSrc = "../images/militaryPaperPharo.png";
		break;
	default:
		$imageSrc = "../images/militaryPaperBalrog.png";
}

for ($i = 0; $i <= $numFullPages; $i++) {
    $isLastPage = ($i == $numFullPages);
    $chunkSize = ($isLastPage && $isLastPageShort) ? 900 : 1200;
    $chunk = substr($missionText, $i * 1200, $chunkSize);
?>

<div class="containerPaper">
<img src="<?php echo $imageSrc; ?>" style="position:absolute; z-index: -1; min-width: 8.25in;">
    <div class="paper">
        <br>
        <br>
        <br>
        <br>
        <div class="missionNameCSS">
            <h1 class="missionName"><?php echo $missionName; ?></h1>
        </div>
        <div class="missionText">
            <pre><?php echo $chunk; ?></pre>
        </div>
        <?php if ($isLastPage) { ?>
        <div class="missionAttribute">
            <h2><?php echo $locationMoon; ?></h2>
        </div>
        <div class="missionAttribute">
            <h4>Start Time: <?php echo $startTime; ?><br>
            End Time: <?php echo $endTime; ?></h4>
        </div>
        <?php } ?>
    </div>
</div>

<?php
}
?>

<script src="../script/upload.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../script/newMission.js"></script>
<script src="../script/newMissionServer.js"></script>
<script>
async function takeScreenshot() {
    // ... your existing code ...
}

window.onload = function() {
    takeScreenshot();
};
</script>
	</body>
</html>

<?php
function formatDate($timestamp) {
  $date = new DateTime($timestamp, new DateTimeZone('America/New_York'));

  $day = $date->format('j');
  $month = $date->format('F');
  $year = $date->format('Y');
  $time = $date->format('g:i a');

  if ($day % 10 == 1 && $day != 11) {
      $day .= 'st';
  } elseif ($day % 10 == 2 && $day != 12) {
      $day .= 'nd';
  } elseif ($day % 10 == 3 && $day != 13) {
      $day .= 'rd';
  } else {
      $day .= 'th';
  }

  return "$month $day, $year $time Eastern";
}

?>
