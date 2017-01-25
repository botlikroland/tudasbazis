<?php
include_once('process.php');

error_reporting(E_ALL);
ini_set('display_errors','On');



?>

<html>
	<head>
		<title>Új cikk felvitele</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
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
		<form action=<?php echo '"index.php?location='.$_GET['location'].'"'; ?> method="post">
			Cím <br>
			<textarea type="text" name="title" rows="1" cols="50"/></textarea><br />
			Tartalom <br>
			<textarea type="text" id="text" name="text" rows="10" cols="50"/></textarea><br />
			<input type="submit" name="saveArticle" value="Cikk mentése" />
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