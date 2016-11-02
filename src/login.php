<?php

session_start();
unset($_SESSION['userid']);
include_once('FlashMessage.php');

FlashMessage::show();

//http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-grid-system.php
?>


<html>
	<head>
		<title>Bejelentkezés</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
	

	
	<div class="container">
	<div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4">
<form action="main.php" method="post">
	<div class="form-group">
		<label for="inputEmail">E-mail cím</label>
		<input type="email" class="form-control" name="email" placeholder="E-mail cím">
	</div>
	<div class="form-group">
		<label for="inputPassword">Jelszó</label>
		<input type="password" class="form-control" name="password" placeholder="Jelszó">
	</div>
	<button type="submit" name="login" class="btn btn-primary">Bejelentkezés</button>
	
	</div>
</form>	
</div>
</div>



	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>