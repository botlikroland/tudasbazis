<?php
include_once('process.php');

$db = new DB();

$result = $db->query("SELECT * FROM articles WHERE id = " . $_GET['articleid'] .";");
$db->close();

$title = $result[0]['title'];
$text = $result[0]['text'];


?>


<html>
	<head>
		<title>Cikk törlése</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>
	

<form action="<?php echo 'index.php?articleid='.$_GET['articleid'] ?>" method="post">
	Cím <br>
	<textarea type="text" name="title" rows="1" cols="50"/><?php echo $title; ?></textarea><br />
	Tartalom <br>
	<textarea type="text" name="text" rows="4" cols="50"/><?php echo $text; ?></textarea><br />
	Biztosan törölni szeretnéd a cikket? <br>
	<input type="submit" name="deleteArticle" value="Cikk törlése" />
</form>	

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>