<?php
include_once('process.php');

$db = new DB();

$result = $db->query("SELECT * FROM articles WHERE id = " . $_GET['id'] .";");
$db->close();

$title = $result[0]['title'];
$text = $result[0]['text'];


?>


<html>
	<head>
		<title>Cikk törlése</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
	
<a href="main.php">Vissza a főoldalra</a>
	

<form action="<?php echo 'main.php?id='.$_GET['id'] ?>" method="post">
	Cím <br>
	<textarea type="text" name="title" rows="1" cols="50"/><?php echo $title; ?></textarea><br />
	Tartalom <br>
	<textarea type="text" name="text" rows="4" cols="50"/><?php echo $text; ?></textarea><br />
	Biztosan törölni szeretnéd a cikket? <br>
	<input type="submit" name="deleteArticle" value="Cikk törlése" />
	<input type="submit" name="backMain"  value="Vissza a főoldalra" /><br />
</form>	

	</body>
</html>