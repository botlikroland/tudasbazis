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
		<title>Fejléc törlése</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" />
		<link rel="stylesheet" href="metisMenu.min.css" />
		<link rel="stylesheet" href="demo.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/themes/prism.min.css" />
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
	
<?php
	include_once('menu.php');
	include_once('sideMenu.php');
?>

<div class="row">
	<div class="col-md-2">
		<?php sideMenu::show(); ?>
	</div>
	<div class="col-md-10">
	<div class="container">
	<form action=<?php echo '"index.php?articleid='.$_GET['articleid'].'&location='.$_GET['location'];?>" method="post">
		<textarea type="text" name="text" rows="10" cols="50"/><?php echo $text; ?></textarea><br />
		<input type="submit" name="deleteArticle" value="Cikk törlése" />
		<script>
		    	CKEDITOR.replace('text');
		</script>
	</form>	
</div>
</div>



	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="metisMenu.min.js"></script>
    <script>
		$(function() {
			$('#menu').metisMenu();
		});
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>
	</body>
</html>