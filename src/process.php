<?php
	session_start();
	
	include_once('db.php');
	include_once('FlashMessage.php');
    include_once('Utilities.php');

    FlashMessage::show();
    
	//BE VAN JELENTKEZVE
	if(isset($_SESSION['userid']))
    {
	
		//JELSZÓT AKAR VÁLTOZTATNI
		if(isset($_POST['changepw']))
		{
			header("Location: /changepw.php");
		}
		
		//TÉNYLEG JELSZÓT VÁLTOZTAT
		if(isset($_POST['change']))
		{
            Utilities::ChangePassword();
		}
		
		//ÚJ CIKK
		if(isset($_POST['newArticle']))
		{
			header("Location: /newArticle.php");
		}	

		//ÚJ CIKK MENTÉSE
		if(isset($_POST['saveArticle']))
		{
            Utilities::SaveArticle();
		}
		
		//VISSZA A FŐOLDALRA
		if(isset($_POST['backMain']))
		{
			header("Location: /main.php");
		}	
		
		//KIJELENTKEZIK
		if(isset($_POST['logout']))
		{
			Utilities::Logout();
		}

	//MÉG NINCS BEJELENTKEZVE
	}
	else
    {
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			//BEJELENTKEZIK
			if(isset($_POST['login']))
			{
                Utilities::Login();
            }

			//REGISZTRÁL
			elseif($_POST['register'])
            {
                Utilities::Register();
            }
        }
	}
?>