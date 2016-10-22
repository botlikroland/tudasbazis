<?php
include_once('process.php');





?>

<html>
	<head>
		<title>Új cikk felvitele</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>

	

<form action="main.php" method="post">
	<textarea type="text" name="text" rows="4" cols="50"/></textarea><br />
	<input type="submit" name="saveArticle" value="Cikk mentése" />
	<input type="submit" name="backMain"  value="Vissza a főoldalra" /><br />
</form>	

	</body>
</html>