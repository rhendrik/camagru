<?php
	require('database.php');
	require('pdo_connection.php');
	session_start();
	session_unset();
	session_destroy();

	$ditch = "DROP DATABASE IF EXISTS $DB_NAME";
	$conn->exec($ditch);
	echo 'exiting';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Drop_DB</title>
</head>
<body>
	<button><a href ="setup.php">Setup</a></button>
</body>
</html>