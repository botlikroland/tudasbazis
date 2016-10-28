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
                FlashMessage::setMessage("Sikeres jelszó változtatás!");
                header("Location: /main.php");
            }
            else
            {
                FlashMessage::setMessage("Nem egyezik a két új jelszó!");
                header("Location: /changepw.php");
            }
        }
        else
        {
            FlashMessage::setMessage("Nem ez a régi jelszó!");
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

        $db->update("INSERT INTO articles (ownerid,date,title,text) VALUES ('$userid','$currentTime','$title','$text');");
        $db->close();
        FlashMessage::setMessage("Sikeres cikk mentés!");
        header("Location: /main.php");
    }


    public static function Logout()
    {
        unset($_SESSION['userid']);
        FlashMessage::setMessage("Sikeres kijelentkezés!");
        header("Location: /login.php");
    }

    public  static function Login()
    {
        $db = new DB();

        $username = $db->escape($_POST['username']);
        $password = $db->escape($_POST['password']);

        $result = $db->query("SELECT * FROM login WHERE username = '$username' AND password = MD5('$password');");
        $db->close();

        if(count($result)){
            $_SESSION['username'] = $username;
            $_SESSION['userid']   = $result[0]['id'];
        } else {
            FlashMessage::setMessage("Sikertelen bejelentkezés!");
            header("Location: /login.php");
        }
    }

    public static function Register()
    {
        $db = new DB();

        $username = $db->escape($_POST['username']);
        $password = $db->escape($_POST['password']);

        if(!($db->query("SELECT * FROM login WHERE username = '$username';"))) {
            $db->update("INSERT INTO login (username,password) VALUES ('$username',MD5('$password'));");
            $_SESSION['username'] = $username;
            $userid = $db->query("SELECT id FROM login WHERE username = '$username' AND password = MD5('$password');");
            $_SESSION['userid']   = $userid[0]['id'];
            $db->close();
        }
        else
        {
            $db->close();
            header("Location: /login.php");
        }
    }


}



?>