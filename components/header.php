<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
	<title>Camagru</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script src="js/notifications.js"></script>
</head>
<body>
	<div id="header">
		<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		require('config/pdo_connection.php');	
		if (!(isset($_SESSION['logged_in'])) && empty($_SESSION['logged_in'])) {
			?>	
			<div class="columns is-gapless">
				<div class="hero">
					<div class="yes column">
						<button class="button  notification is-link">
							<a href="index.php" >Feed</a>
						</button>	
					</div>
					<div class="yes column">
						<button class="button  notification is-link">
							<a href="login.php" >Login</a>
						</button>
					</div>
					<div class="yes column">
						<button class="button  notification is-link">
							<a href="signup.php" >Sign Up</a>
						</button>
					</div>
				</div>
			</div>	
			<?php
		}
		else {
			?>	
			<div class="columns">
				<div class="column">
					<a href="index.php" id="blue">Feed</a>
				</div>
				<div class="column">
					<a href="personal_gallery.php" id="white">My Gallery</a>
				</div>
				<div class="column">
					<a href="profile.php" id="blue">Profile</a>
				</div>
				<div class="column">
					<a href="camera.php" id="white">Camera</a>
				</div>
				<div class="column">
					<a href="logout.php" id ="blue">Logout</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	<hr class="h">