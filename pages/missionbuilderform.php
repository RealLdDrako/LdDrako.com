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
		<script src="../script/upload.js" type="text/javascript"></script>
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
	<!--Load SlideShow-->
	<body onload="showSlides(1, 0), showSlides(1, 1), showSlides(1, 2), showSlides(1, 3)">
		<div class="topnav">
			<?php include '../menu.php'; ?>
		</div>
        <br>
        <!-- main content to be restructured for navbar improvements -->
        <div class="header">
			<h style="font-size: 450%;">LdDrako's Den</h>
			<p>
                Welcome to LdDrako's Den. Here you will find useful links, tools and videos relating to Star Citizen. 
				I'm sure you will find them useful. If you have
                any suggestions or additions, please contact me at <a href="mailto:RealLdDrako@gmail.com">LdDrako</a>
            </p>
            <p>You can also follow the Den's<a href="../pages/discord.html" target="_blank">Discord</a>.</p>
		</div>

		<div class="profile">
			<h1>Make a new MISSION here!!!</h1>
			<div class="alignLeft">
				<form action="../script/missionInsertData.php" method="post">
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
							<!-- Add more options as needed -->
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
					<label for="location">Location:</label>
					<br>
					<input type="text" id="location" name="location">
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
		
		
		

			<div class="profile" id="profileCard">
				<h2>About me</h2>
				<img src="../images/BalrogPortrait.png" alt="LdDrako" style="width: 49%" />
				<h1>Lord Drako</h1>
				<p class="profileCardTitle">Leader & Founder of 'LdDrako's Den'</p>
				<p>Grand Maiar of Angband</p>
				<div style="margin: 24px 0">
					<p>
						I'm Lord Drako, also known as LdDrako in verse. You can usually find me helping other <span class="greenText">Star</span>/<span class="redText"
							>Scum</span
						>
						citizens finding the arms and armor they need in the verse. I don't judge, I'll sell to anyone with the coin.
					</p>
				</div>
				<h2>Follow Me</h2>
				<p>
					<a href="https://www.twitch.tv/lddrako" target="_blank">
						<img src="../images/twitchBig.jfif" alt="twitch symbol" style="width: 76px; height: 40px" />
					</a>
				</p>
				<p>
					<a href="https://twitter.com/LdDrako?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-lang="en" data-show-count="false"
						>Follow @LdDrako</a
					>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</p>

				<p>
					<a href="https://www.youtube.com/channel/UC3DFubwoSWi2JEMuXpl8VMw" target="_blank">
						<img src="../images/youtube.jfif" alt="youtube symbol" style="width: 76px; height: 40px" />
					</a>
				</p>
			</div>
		</div>

		<div class="footer">
			<h2>LdDrako.com</h2>
			<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
		</div>
		<script src="../script/aroundTheVerse.js" type="text/javascript"></script>
		<script src="../script/slideshow.js"></script>
		<script src="../script/formFullScreen.js"></script>
		<script src="../script/formMission.js"></script>
    </body>
</html>