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
	<form action="index.php" method="post" class="form-horizontal">
		<fieldset>
			<legend>Jelszó változtatás</legend>
			<div class="form-group">
				<label class="col-md-4 control-label" for="oldpw">Régi jelszó</label>
				<div class="col-md-4">
					<input name="oldpw" type="password" class="form-control input-md">
				</div>
			</div>
    
			<div class="form-group">
				<label class="col-md-4 control-label" for="newpw">Új jelszó</label>
				<div class="col-md-4">
					<input name="newpw" type="password" class="form-control input-md">
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-md-4 control-label" for="newpw2">Új jelszó újra</label>
				<div class="col-md-4">
					<input name="newpw2" type="password" class="form-control input-md">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="change"></label>
				<div class="col-md-8">
					<button type="submit" name="change" class="btn btn-success">Megváltoztat</button>
				</div>
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>