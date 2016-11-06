<?php
	include_once('process.php');
	$names = Utilities::GetNameList();
	
?>

<html>
	<head>
		<title>[Admin] Jelszó változtatás</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>

	<form action="index.php" method="post" class="form-horizontal">
		<fieldset>
			<legend>[Admin] Jelszó változtatás</legend>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="user">Felhasználó</label>
				<div class="col-md-4">
					<select class="selectpicker" data-live-search="true" name="selectedname">
						<?php echo $names; ?>
					</select>
				</div>
			</div>
    
			<div class="form-group">
				<label class="col-md-4 control-label" for="newpw">Új jelszó</label>
				<div class="col-md-4">
					<input name="newpw" type="password" class="form-control input-md">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="change"></label>
				<div class="col-md-8">
					<button type="submit" name="adminchange" class="btn btn-success">Megváltoztat</button>
				</div>
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	</body>
</html>