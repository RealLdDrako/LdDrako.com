<!DOCTYPE html>
<html>
	<head>
		<title>LdDrako's Den</title>
		<meta charset="UTF-8" />
		<meta name="description" content="LdDrako's Den" />
		<meta name="keywords" content="LdDrako, StarCitizen, Star Citizen, contract, contract builder, form, " />
		<meta name="author" content="LdDrako" />
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
	<body>
		<div class="topnav">
<?php include '../menu.php'; ?>
</div>
<div class="profile">
	<h1>Contract Builder</h1>
	<div class="alignLeft">
		<form action="../script/contractInsertData.php" method="post">
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
				<label for="contractOwner">Contract Owner:</label>
				<br>
				<input type="text" id="contractOwner" name="contractOwner" placeholder="Who is making the contract">
				</div>
			<div class="form-group">
			<div class="form-group">
				<label for="contractName">Contract Name:</label>
				<br>
				<input type="text" id="contractName" name="contractName">
				</div>
			<div class="form-group">
				<label for="contractType">Contract Type:</label>
				<br>
				<select id="contractType" name="contractType" onchange="checkContractType(this)">
					<option value="Assasination">Assassination</option>
					<option value="Mercenary">Mercenary</option>
					<option value="Escort">Escort</option>
					<option value="Cargo">Cargo</option>
					<option value="Transport">Transport</option>
					<option value="Salvage">Salvage</option>
					<option value="Combat Towing">Combat Towing</option>
					<option value="Purchase">Purchase</option>
				</select>
			<div id="playerTagDiv" style="display: block;" class="form-group">
				<label for="playerTag">Target's Name:</label>
				<br>
				<input type="text" id="playerTag" name="playerTag" placeholder="Who do you want Assassinated">
			</div>
			</div>
			<div class="form-group">
    			<label for="contractReward">Contract Reward (UEC):</label>
    			<br>
    			<input type="number" id="contractReward" name="contractReward" min="0">
			</div>
			<div class="form-group">
				<label for="location">Location: Likely hiding at</label>
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
			<div class="form-group">
				<label for="contractText">Contract Information:</label>
				<br>
				<textarea id="contractText" name="contractText" rows="20" placeholder="Give us more information on the contract."></textarea>
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
		<script src="../script/missionbuilderform.js"></script>
		<script src="../script/newMissionServer.js"></script>
    </body>
</html>