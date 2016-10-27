<?php

class FlashMessage
{

    public static function setMessage($szo)
    {
        $_SESSION['flashMessage'] = $szo;
    }

    public static function show()
    {		
		if (isset($_SESSION['flashMessage']) && $_SESSION['flashMessage']!="")
		{
			echo '<div id="alert">'.$_SESSION['flashMessage'].'</div>';
			FlashMessage::setMessage("");
		}
		
    }
}
?>