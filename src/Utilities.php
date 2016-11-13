<?php

class Utilities
{


    public static function ChangePassword()
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
                $db->close();
                FlashMessage::setMessage("Sikeres jelszó változtatás!","success");
                header("Location: /index.php");
            }
            else
            {
                FlashMessage::setMessage("Nem egyezik a két új jelszó!","danger");
                header("Location: /changepw.php");
            }
        }
        else
        {
            FlashMessage::setMessage("Nem ez a régi jelszó!","danger");
            header("Location: /changepw.php");
        }
    }

    public static function SaveArticle()
    {
        $db = new DB();

        $userid = $_SESSION['userid'];
        $currentTime = date("Y-m-d H:i:s", time());
		$title = $_POST['title'];
        $text = $_POST['text'];

        $db->update("INSERT INTO articles (ownerid,created,modified,title,text) VALUES ('$userid','$currentTime','$currentTime','$title','$text');");
        $db->close();
        FlashMessage::setMessage("Sikeres cikk mentés!","success");
        header("Location: /index.php");
    }
	
	public static function UpdateArticle()
    {
        $db = new DB();

        $userid = $_SESSION['userid'];
        $currentTime = date("Y-m-d H:i:s", time());
		$title = $_POST['title'];
        $text = $_POST['text'];
		$articleID = $_GET['id'];
		
        $db->update("UPDATE articles SET modified='$currentTime', title='$title', text='$text' WHERE id='$articleID';");
        $db->close();
        FlashMessage::setMessage("Sikeres cikk módosítás!","success");
        header("Location: /index.php");
    }
	
	public static function DeleteArticle()
    {
        $db = new DB();

        $userid = $_SESSION['userid'];
        $articleID = $_GET['id'];
		
        $db->update("DELETE FROM articles WHERE id='$articleID';");
        $db->close();
        FlashMessage::setMessage("Cikk törölve!","success");
        header("Location: /index.php");
    }

    public static function Logout()
    {
        unset($_SESSION['userid']);
        FlashMessage::setMessage("Sikeres kijelentkezés!","success");
        header("Location: /login.php");
    }

    public static function Login()
    {
        $db = new DB();

        $email = $db->escape($_POST['email']);
        $password = $db->escape($_POST['password']);

        $result = $db->query("SELECT id FROM login WHERE email = '$email' AND password = MD5('$password');");
        $db->close();

        if(count($result)){
            $_SESSION['userid']   = $result[0]['id'];
        } else {
            FlashMessage::setMessage("Sikertelen bejelentkezés!","danger");
            header("Location: /login.php");
        }
    }
	
	public static function GetNameById()
    {
        $db = new DB();

        $id = $_SESSION['userid'];

        $result = $db->query("SELECT lastname, firstname FROM login WHERE id = '$id';");
        $db->close();

        if(count($result))
		{
			$nev = $result[0]['lastname'];
			$nev .= " " . $result[0]['firstname'];
			return $nev;
		}
		else
		{
			return "";
		}
    }
	
	public static function GetUserDataById()
    {
        $db = new DB();
		
		$id = $_POST['getuserdatabyid'];

        $result = $db->query("SELECT lastname, firstname, email FROM login WHERE id = '$id';");
        $db->close();
		$data = array("lastname"=>$result[0]["lastname"],"firstname"=> $result[0]["firstname"], "email"=>$result[0]["email"]);
		
		echo json_encode($data);
    }
	
	public static function GetNameList()
	{
		$db = new DB();
		
		$result = $db->query("SELECT lastname, firstname, id, email FROM login ORDER BY lastname, firstname;");
		$db->close();
		
		$output = "";
		foreach($result as $name)
		{
			$output .= '<option value="' . $name['id'] . '" data-subtext="' . $name['email'] . '">' . $name['lastname'] . " " . $name['firstname'] . "</option>";
		}
		return $output;
	}
	
	public static function AdminAddUser()
    {
        $db = new DB();

        $email = $db->escape($_POST['email']);
        $password = $db->escape($_POST['password']);
		$lastname = $db->escape($_POST['lastname']);
		$firstname = $db->escape($_POST['firstname']);
		

        if(!($db->query("SELECT * FROM login WHERE email = '$email';"))) {
            $db->update("INSERT INTO login (email, password, lastname, firstname) VALUES ('$email',MD5('$password'),'$lastname','$firstname');");
            $db->close();
			FlashMessage::setMessage("Sikeres felvitel!","success");
			header("Location: /adminusercontrol.php");
        }
        else
        {
            $db->close();
			FlashMessage::setMessage("Már létezik ilyen felhasználó!","danger");
            header("Location: /adminusercontrol.php");
        }
    }
	
	public static function AdminUpdateUser()
    {
        $db = new DB();

		$userid = $db->escape($_POST['userid']);
        $email = $db->escape($_POST['email']);
        $password = $db->escape($_POST['newpw']);
		$lastname = $db->escape($_POST['lastname']);
		$firstname = $db->escape($_POST['firstname']);
		
		if($password == "")
		{	
			$db->update("UPDATE login SET email = '$email', lastname = '$lastname', firstname = '$firstname' WHERE id = '$userid'");
			$db->close();
			FlashMessage::setMessage("Sikeres módosítás!","success");
			header("Location: /adminusercontrol.php");
		}
		else
		{
			$db->update("UPDATE login SET email = '$email', lastname = '$lastname', firstname = '$firstname', password = MD5('$password') WHERE id = '$userid'");
			$db->close();
			FlashMessage::setMessage("Sikeres módosítás!","success");
			header("Location: /adminusercontrol.php");
		}
    }
	
	public static function AdminDeleteUser()
    {
        $db = new DB();

		$userid = $db->escape($_POST['userid']);
		
		$db->update("DELETE FROM login WHERE id='$userid';");
		$db->close();
		FlashMessage::setMessage("Sikeres törlés!","success");
		header("Location: /adminusercontrol.php");
	}
}



?>