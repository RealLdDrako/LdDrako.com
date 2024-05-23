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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the last 6 contracts
$query = $conn->query('SELECT contractName, filenamesArray FROM contracts ORDER BY id DESC LIMIT 6');
$contracts = $query->fetch_all(MYSQLI_ASSOC);

$contractIndex = 0; // Add this line before the foreach loop
foreach ($contracts as $contract) {
    // Get the 'contractName' and 'filenamesArray' from the contract
    $contractName = $contract['contractName'];
    $filenamesArray = explode(',', $contract['filenamesArray']); // Assuming filenames are comma-separated

    // Sort the filenames
    sort($filenamesArray);

    // Prepare array to hold the image URLs
    $imageUrls = [];

    foreach ($filenamesArray as $filename) {
        // Remove the extra characters from the filename
        $filename = trim($filename, '["]');

        // Include the full URL path to the images
        $imageUrls[] = 'https://www.LdDrako.com/images/contracts/' . $filename;
    }
    ?>

<div class="profile">
        <h2><?php echo $contractName; ?></h2> <!-- Use $contractName instead of $missionName -->
        <div id="carousel<?php echo $contractIndex; ?>" class="carousel slide">
            <ol class="carousel-indicators">
                <?php foreach ($imageUrls as $index => $imageUrl) { ?>
                    <li data-target="#carousel<?php echo $contractIndex; ?>" data-slide-to="<?php echo $index; ?>"<?php echo $index === 0 ? ' class="active"' : ''; ?>></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($imageUrls as $index => $imageUrl) { ?>
                    <div class="carousel-item<?php echo $index === 0 ? ' active' : ''; ?>">
                        <img class="d-block w-100" src="<?php echo $imageUrl; ?>" alt="Slide <?php echo $index + 1; ?>">
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carousel<?php echo $contractIndex; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel<?php echo $contractIndex; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<?php
    $contractIndex++; // Increment the contract index after each loop
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