<?php
	session_start();
	
	include_once('db.php');
	include_once('FlashMessage.php');
    include_once('Utilities.php');

	
	FlashMessage::show();
	
	//BE VAN JELENTKEZVE
	if(isset($_SESSION['userid'])){
		//ADMIN-------------------------------------
		
		//JELSZÓT VÁLTOZTAT [ADMIN]
		if(isset($_POST['adminchange'])){
            Utilities::AdminChangePassword();
		}
		
		//FELHASZNÁLÓ FELVITEL[ADMIN]
		if(isset($_POST['adminadduser'])){
            Utilities::AdminAddUser();
		}
		
		if(isset($_POST['getuserdatabyid'])){
			Utilities::GetUserDataById();
		}
		
		if(isset($_POST['adminupdateuser'])){
            Utilities::AdminUpdateUser();
		}
		
		if(isset($_POST['admindeleteuser'])){
            Utilities::AdminDeleteUser();
		}
		
		//ADMIN-VÉGE--------------------------------
		
		//TÉNYLEG JELSZÓT VÁLTOZTAT
		if(isset($_POST['change'])){
            Utilities::ChangePassword();
		}

		//ÚJ CIKK MENTÉSE
		if(isset($_POST['saveArticle'])){
            Utilities::SaveArticle();
		}

		//ÚJ FEJLÉC MENTÉSE
		if(isset($_POST['saveTitle'])){
            Utilities::SaveTitle();
		}
		
		//CIKK MÓDOSÍTÁSA
		if(isset($_POST['updateArticle'])){
            Utilities::UpdateArticle();
		}
		
		//FEJLÉC MÓDOSÍTÁSA
		if(isset($_POST['updateTitle'])){
            Utilities::UpdateTitle();
		}

		//CIKK TÖRLÉSE
		if(isset($_POST['deleteArticle'])){
            Utilities::DeleteArticle();
		}

		//CIKK TÖRLÉSE
		if(isset($_POST['deleteTitle'])){
            Utilities::DeleteTitle();
		}
		
		//VISSZA A FŐOLDALRA
		if(isset($_POST['backMain'])){
			header("Location: /index.php");
		}	
		
		//KIJELENTKEZIK
		if(isset($_GET['logout'])){
			Utilities::Logout();
		}

		if(isset($_POST['position'])){
			Utilities::SavePosition();
		}

	//MÉG NINCS BEJELENTKEZVE
	}
	else{
		if(isset($_POST['email']) && isset($_POST['password'])){
			//BEJELENTKEZIK
			if(isset($_POST['login'])){
                Utilities::Login();
            }

			//REGISZTRÁL
			elseif($_POST['register']){
                Utilities::Register();
            }
        }
		else{
			header("Location: /login.php");
		}
	}
?>