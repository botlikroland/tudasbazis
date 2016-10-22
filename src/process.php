<?php
	session_start();
	
	include_once('db.php');
	include_once('FlashMessage.php');
	
	$flashMessage = new flashMessage();
    $flashMessage->show();
    
	
	
	//BE VAN JELENTKEZVE
	if(isset($_SESSION['userid'])){
	
		//JELSZÓT AKAR VÁLTOZTATNI
		if(isset($_POST['changepw']))
		{
			header("Location: /changepw.php");
		}
		
		//TÉNYLEG JELSZÓT VÁLTOZTAT
		if(isset($_POST['change']))
		{
			$db = new DB();
			
			$userid = $_SESSION['userid'];
			$oldpw = $db->escape($_POST['oldpw']);
			$newpw = $db->escape($_POST['newpw']);
			$newpw2 = $db->escape($_POST['newpw2']);
			
			$oldPwCheck = $db->query("SELECT * FROM login WHERE id = '$userid' AND password = MD5('$oldpw');");
			if(count($oldPwCheck))
			{
				if($newpw == $newpw2)
				{
					$db->query("UPDATE login SET password = MD5('$newpw') where id = '$userid'");
					$flashMessage->setMessage("Sikeres jelszó változtatás!");
					header("Location: /main.php");
				}
				else
				{
					$flashMessage->setMessage("Nem egyezik a két új jelszó!");
					header("Location: /changepw.php");
				}
			}
			else
			{
				$flashMessage->setMessage("Nem ez a régi jelszó!");
				header("Location: /changepw.php");
			}	
		}
		
		//ÚJ CIKK
		if(isset($_POST['newArticle']))
		{
			header("Location: /newArticle.php");
		}	

		//ÚJ CIKK MENTÉSE
		if(isset($_POST['saveArticle']))
		{
			$db = new DB();

			$userid = $_SESSION['userid'];
			$currentTime = date("Y-m-d H:i:s", time());
			$text = $_POST['text'];
			
			$db->update("INSERT INTO articles (ownerid,date,text) VALUES ('$userid','$currentTime','$text');");
			$flashMessage->setMessage("Sikeres cikk mentés!");
			header("Location: /main.php");
		}
		
		//VISSZA A FŐOLDALRA
		if(isset($_POST['backMain']))
		{
			header("Location: /main.php");
		}	
		
		//KIJELENTKEZIK
		if(isset($_POST['logout']))
		{
			unset($_SESSION['userid']);
			$flashMessage->setMessage("Sikeres kijelentkezés!");
			header("Location: /login.php");
		}

	//MÉG NINCS BEJELENTKEZVE
	} else {
		if(isset($_POST['username']) && isset($_POST['password'])){
			//BEJELENTKEZIK
			if(isset($_POST['login'])){
				$db = new DB();
				
				$username = $db->escape($_POST['username']);
				$password = $db->escape($_POST['password']);
				
				$result = $db->query("SELECT * FROM login WHERE username = '$username' AND password = MD5('$password');");
				
				if(count($result)){
					$_SESSION['username'] = $username;
					$_SESSION['userid']   = $result[0]['id'];
				} else {
					$flashMessage->setMessage("Sikertelen bejelentkezés!");
					header("Location: /login.php");
				}
				
				$db->close();
			//REGISZTRÁL
			} elseif($_POST['register']) {
				$db = new DB();
				
				$username = $db->escape($_POST['username']);
				$password = $db->escape($_POST['password']);
				
				if(!($db->query("SELECT * FROM login WHERE username = '$username';"))) {
					$db->update("INSERT INTO login (username,password) VALUES ('$username',MD5('$password'));");
					$_SESSION['username'] = $username;
					$userid = $db->query("SELECT id FROM login WHERE username = '$username' AND password = MD5('$password');");
					$_SESSION['userid']   = $userid[0]['id'];
				}
			}
			
		} else {
			header("Location: /login.php");
		}
	}
?>