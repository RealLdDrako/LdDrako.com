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
		<link rel="stylesheet" href="../css/MusterBriefing.css" />
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
	<body onload="showSlides(1, 0), showSlides(1, 1), showSlides(1, 2), showSlides(1, 3)">
		<div class="topnav">
<?php include '../menu.php'; ?>
</div>
<div class="profile">
	<h1>Mission Builder</h1>
	<div class="alignLeft">
		<form action="../script/missionInsertData.php" method="post">
			<div class="form-group">
				<label for="org">Alliance Member:</label>
				<br>
				<select id="orgM" name="orgMember">
					<option value="default">Blank</option>
					<option value="drako">Ld Drako's Den</option>
					<option value="joker">Joker's Gambit</option>
					<option value="pharo">Pharo's Group</option>
				</select>
			</div>
			<div class="form-group">
				<label for="missionName">Mission Name:</label>
				<br>
				<input type="text" id="missionName" name="missionName">
				</div>
			<div class="form-group">
				<label for="missionType">Mission Type:</label>
				<br>
				<select id="missionType" name="missionType">
					<option value="Mercenary">Mercenary</option>
					<option value="Industrial">Industrial</option>
					<option value="Training">Training</option>
				</select>
			</div>
				<div class="form-group">
				<label for="location">Location:</label>
				<br>
				<select id="location" name="location">
					<option value="Stanton-->Hurston">Stanton-->Hurston</option>
					<option value="Stanton-->Crusader">Stanton-->Crusader</option>
					<option value="Stanton-->ArcCorp">Stanton-->ArcCorp</option>
					<option value="Stanton-->MicroTech">Stanton-->MicroTech</option>
				</select>
				<select id="locationM" name="locationMoon">
				</select>
			</div>
			<div class="form-group">
				<label for="startTime">Start Time:</label>
				<br>
				<input type="datetime-local" id="startTime" name="startTime">
			<div class="form-group">
				<label for="endTime">End Time:</label>
				<br>
				<input type="datetime-local" id="endTime" name="endTime">
			</div>
		</div>
			<div class="form-group">
				<label for="missionText">Mission Information:</label>
				<br>
				<textarea id="missionText" name="missionText" rows="20"></textarea>
			</div>
			<br>
			<div class="form-group">
				<button type="submit">Submit</button>
			</div>
		</form>
		</div>
	</div>
</div>
		<div class="footer">
			<h2>LdDrako.com</h2>
			<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
		</div>
		<script src="../script/aroundTheVerse.js" type="text/javascript"></script>
		<script src="../script/slideshow.js"></script>
		<script src="../script/missionbuilderform.js"></script>
    </body>
</html>