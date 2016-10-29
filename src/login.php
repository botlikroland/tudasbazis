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
	
	
	
	
	
	
<form action="main.php" method="post">
	Felhasználó név: <input type="text"     name="username" /><br />
	Jelszó: 		 <input type="password" name="password" /><br />
	<input type="submit" name="login" value="Bejelentkezés" />
	<input type="submit" name="register"  value="Regisztráció" />
</form>	


	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>