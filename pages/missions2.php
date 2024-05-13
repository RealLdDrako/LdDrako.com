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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


		<style>
			body {
				background-image: url('../images/background_softened_vintage.png');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				background-position: center;
				align-items: center;
			}
	</style>
	</head>

<body>
<div class="topnav">
	<?php include '../menu.php'; ?>
</div>

<?php
@include '../../.htpasswds/config.php';
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = $conn->query('SELECT missionName, filenamesArray FROM missions ORDER BY id DESC LIMIT 6');
$missions = $query->fetch_all(MYSQLI_ASSOC);
foreach ($missions as $mission) {
    $missionName = $mission['missionName'];
    $filenamesArray = explode(',', trim($mission['filenamesArray'], '[]')); // Remove brackets before splitting
    $imageUrls = [];
    foreach ($filenamesArray as $filename) {
        $filename = trim($filename, '"'); // Remove quotes from filename
        $imageUrls[] = 'https://www.LdDrako.com/images/missions/' . $filename;
    }
    ?>
    <div id="carousel<?php echo $missionName; ?>" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($imageUrls as $index => $imageUrl) { ?>
                <li data-target="#carousel<?php echo $missionName; ?>" data-slide-to="<?php echo $index; ?>"<?php echo $index === 0 ? ' class="active"' : ''; ?>></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($imageUrls as $index => $imageUrl) { ?>
                <div class="carousel-item<?php echo $index === 0 ? ' active' : ''; ?>">
                    <img class="d-block w-100" src="<?php echo $imageUrl; ?>" alt="Slide <?php echo $index + 1; ?>">
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carousel<?php echo $missionName; ?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel<?php echo $missionName; ?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
}
?>

<div class="footer">
	<h2>LdDrako.com</h2>
	<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
</div>
<script>
$(document).ready(function(){
    $('.carousel').carousel();
});
</script>

</body>
</html>