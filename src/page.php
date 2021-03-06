<?php
include_once('process.php');

error_reporting(E_ALL);
ini_set('display_errors','On');



?>

<html>
	<head>
		<title>Főoldal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" />
		<link rel="stylesheet" href="metisMenu.min.css" />
		<link rel="stylesheet" href="demo.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/themes/prism.min.css" />
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
  $(function() {
    $("#sortable").sortable();
    $("#sortable").disableSelection();
  } );
  </script>
		
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
		<div class="text-right btn-toolbar">
			<?php if(Utilities::HasPermission($_SESSION['userid'],'editor')) { ?>
       				<a href=<?php echo 'newarticle.php?location='.$_GET['pageid']; ?> class="btn btn-primary pull-right"> Új cikk </a>
					<a href=<?php echo 'newtitle.php?location='.$_GET['pageid']; ?> class="btn btn-primary pull-right"> Új fejléc </a>
			<?php } ?>
		</div>
	


<?php
	$db = new DB();
		
	$title = $db->query("SELECT title FROM menu WHERE id = " . $_GET['pageid']);
	$db->close();
	
	echo '<legend>'
	.$title[0]['title']
	.'</legend>';

	include_once('articles.php');
	


?>
</div>
</div>

	
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="metisMenu.min.js"></script>
    <script>
		$(function() {
			$('#menu').metisMenu();
		});

		$('#sortable').sortable({
    axis: 'y',
    update: function (event, ui) {
        var data = $(this).sortable('serialize');

        $.ajax({
            data: data,
            type: 'POST',
            url: 'process.php'
        });
    }
});
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>

	</body>
</html>