<?php

session_start();
include_once('FlashMessage.php');

$flashMessage = new FlashMessage();
$flashMessage->show();


?>


<html>
	<head>
		<title>Bejelentkezés</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
	
<form action="main.php" method="post">
	Felhasználó név: <input type="text"     name="username" /><br />
	Jelszó: 		 <input type="password" name="password" /><br />
	<input type="submit" name="login" value="Bejelentkezés" />
	<input type="submit" name="register"  value="Regisztráció" />
</form>	

	</body>
</html>