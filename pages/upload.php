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
		<link rel="stylesheet" href="../css/uploadForm.css" />
		<!--<script src="../files/slideshow.js"></script>
		<script src="../files/imageGenerator.js" type="text/javascript"></script>-->
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
	<body>
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
			<br>
			<div class="uploadForm">
				<form action="../script/upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
					<p>Select image files to upload (JPEG, PNG, GIF only, max 25MB each):</p>
					<div>
						<label for="files">Choose Pictures</label>
						<input type="file" name="files[]" id="files" multiple accept=".jpg,.jpeg,.png,.gif">
					</div>
					<div>
						<progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
					</div>
					<h3 id="status"></h3>
					<button type="button" onclick="uploadFile()">Upload Greatness</button>
				</form>    
			</div>
			
			
			
		<div class="centered">
			<h1>Stills from around the verse!!</h1>
			<div id="slideshow-container">
				<img id="slideshowImage" src="" alt="Slideshow Image" style="width: 100%;">
			</div>
		</div>
        <div>
			<div class="profile" id="profileCard">
				<h2>About me</h2>
				<img src="../images/BalrogPortrait.png" alt="LdDrako" style="width: 50%" />
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
    </body>
</html>