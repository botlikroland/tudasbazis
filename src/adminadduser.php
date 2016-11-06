<?php
	include_once('process.php');
	
?>

<html>
	<head>
		<title>[Admin] Felhasználó felvitel</title>
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
			<legend>[Admin] Felhasználó felvitel</legend>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="email">E-mail</label>
				<div class="col-md-4">
					<input name="email" type="text" class="form-control input-md">
				</div>
			</div>
    
			<div class="form-group">
				<label class="col-md-4 control-label" for="password">Jelszó</label>
				<div class="col-md-4">
					<input name="password" type="password" class="form-control input-md">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="lastname">Vezetéknév</label>
				<div class="col-md-4">
					<input name="lastname" type="text" class="form-control input-md">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="firstname">Keresztnév</label>
				<div class="col-md-4">
					<input name="firstname" type="text" class="form-control input-md">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="change"></label>
				<div class="col-md-8">
					<button type="submit" name="adminadduser" class="btn btn-success">Felvisz</button>
				</div>
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>