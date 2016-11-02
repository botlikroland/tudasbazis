<?php
include_once('process.php');





?>

<html>
	<head>
		<title>Új cikk felvitele</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

<?php
	include_once('menu.php');
?>

<form action="index.php" method="post">
	Cím <br>
	<textarea type="text" name="title" rows="1" cols="50"/></textarea><br />
	Tartalom <br>
	<textarea type="text" name="text" rows="4" cols="50"/></textarea><br />
	<input type="submit" name="saveArticle" value="Cikk mentése" />
</form>	

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>