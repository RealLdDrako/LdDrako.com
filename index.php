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
		<link rel="stylesheet" href="css/site.css" />
		<link rel="stylesheet" href="css/menu.css" />
		<script src="script/upload.js" type="text/javascript"></script>
		<style>
			body {
				background-image: url('images/background_softened_vintage.png');
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
	<?php include 'menu.php'; ?>
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
            <p>You can also follow the Den's<a href="pages/discord.html" target="_blank">Discord</a>.</p>
		</div>

		<div class="centered">
			<h1>Stills from around the verse!!</h1>
			<div id="slideshow-container">
				<img id="slideshowImage" src="" alt="Slideshow Image" style="width: 100%;">
			</div>
		</div>

		<div style="overflow: auto">
			<div class="centered">
				<h1><a href="https://www.youtube.com/playlist?list=PLnfgbAY8rOdG7QAPkEkuFYWhXztOQsMeg" target="_blank">LdDrako's Field Guide</a></h1>
				<div class="slideshow-container">
					<div class="mySlides2">
						<iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/uKS8TOX7_68?si=lAJtgSW2hUwPRJdm" title="YouTube video player - LdDrako shows a beginner's guide to 60k bunkers in Star Citizen" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>

					<div class="mySlides2">
						<iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/QR_WmsBsRS8?si=35mAniwEgY_ETPto" title="YouTube video player - Crusader Elites, is their armor worth the trouble?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>

					<div class="mySlides2">
						<iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/e87yhXppRCQ?si=tvFMR-hzWWS0Lvsz" title="YouTube video player - Taking Down Comms Star Citizen" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>

					<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
				</div>
			</div>
			<div class="centered">
				<h1><a href="https://www.youtube.com/@StantonToday/featured" target="_blank">Stanton Today</a></h1>
				<div class="slideshow-container">
					<div class="mySlides1">
						<iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/lbKeqPOwqLk?si=454v-d8PkGvE3k9m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>

					<div class="mySlides1">
						<iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/kMBcgqs6MNI?si=Lm_d4zwUnmOUqPsU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>					
					</div>

					<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
					<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
				</div>
			</div>
			<div class="profile" id="profileCard">
				<h2>About me</h2>
				<img src="images/BalrogPortrait.png" alt="LdDrako" style="width: 49%"/>
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
						<img src="images/twitchBig.jfif" alt="twitch symbol" style="width: 76px; height: 40px" />
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
						<img src="images/youtube.jfif" alt="youtube symbol" style="width: 76px; height: 40px" />
					</a>
				</p>
			</div>
		</div>

		<div class="footer">
			<h2>LdDrako.com</h2>
			<p>LdDrako.com™, related images, and products are trademarked by LdDrako™</p>
		</div>
		<script src="script/aroundTheVerse.js" type="text/javascript"></script>
		<script src="script/slideshow.js"></script>
    </body>
</html>