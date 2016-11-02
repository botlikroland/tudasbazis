<?php
	include_once('process.php');
	
?>

<html>
	<head>
		<title>Jelszó változtatás</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>
	
	
<form action="index.php" method="post">
	Régi jelszó: 	<input type="password" name="oldpw" /><br />
	Új jelszó:		<input type="password" name="newpw" /><br />
	Új jelszó újra: <input type="password" name="newpw2" /><br />
	<input type="submit" name="change" value="Megváltoztat" />
</form>	

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>