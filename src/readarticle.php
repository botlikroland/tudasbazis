<?php 
	include_once('process.php');
?>


<html>
	<head>
		<title>Cikk olvasása</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>
	

<?php

$db = new DB();

$result = $db->query("SELECT * FROM articles WHERE id = " . $_GET['id'] .";");
$db->close();

foreach($result as $article)
{
    echo  "<h2>" . $article['title'] . "</h1><br><br>" . $article['text'];
}
?>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>