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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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

	<?php
function getMostRecentFiles($dir, $limit) {
    $files = array_map(function ($file) use ($dir) {
        return [
            'file' => $file,
            'time' => filemtime($dir . '/' . $file)
        ];
    }, array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), ['..', '.']));

    usort($files, function ($a, $b) {
        return $b['time'] - $a['time'];
    });

    return array_slice($files, 0, $limit);
}
?>

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

		// Fetch the record with the highest 'id'
		$query = $conn->query('SELECT * FROM missions ORDER BY id DESC LIMIT 1');
		$record = $query->fetch_assoc();

		// Get the 'filenamesArray' from the record
		$filenamesArray = explode(',', $record['filenamesArray']); // Assuming filenames are comma-separated
		?>

	<div class="profile">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $files = getMostRecentFiles('../images/missions', 10);
            foreach ($files as $index => $file) {
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $index . '"' . ($index === 0 ? ' class="active"' : '') . '></li>';
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            foreach ($files as $index => $file) {
                echo '<div class="carousel-item' . ($index === 0 ? ' active' : '') . '">';
                echo '<img class="d-block w-100" src="../images/missions/' . $file['file'] . '" alt="Slide ' . ($index + 1) . '">';
                echo '</div>';
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	</div>

	<div class="footer">
		<h2>LdDrako.com</h2>
		<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
	</div>
    <script>
// This function fetches the latest images and updates the carousel
function updateCarousel() {
    $.ajax({
        url: 'missions_Images.php', // The URL of the PHP script that fetches the latest images
        method: 'GET',
        success: function(data) {
            // data should be an array of image URLs
            var carouselInner = $('.carousel-inner');
            carouselInner.empty(); // Remove old slides

            data.forEach(function(url, index) {
                var activeClass = index === 0 ? ' active' : '';
                var newSlide = '<div class="carousel-item' + activeClass + '">' +
                               '<img class="d-block w-100" src="' + url + '" alt="Slide ' + (index + 1) + '">' +
                               '</div>';
                carouselInner.append(newSlide); // Add new slide
            });
        }
    });
}

// Call updateCarousel every 5 seconds
setInterval(updateCarousel, 5000);
</script>
</body>
</html>

</body>
</html>
