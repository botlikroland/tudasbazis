<?php

class FlashMessage
{

    function __construct()
    {

    }

    function setMessage($szo)
    {
        $_SESSION['flashMessage'] = $szo;
    }

    function show()
    {		
		if (isset($_SESSION['flashMessage']) && $_SESSION['flashMessage']!="")
		{
			echo '<div id="alert">'.$_SESSION['flashMessage'].'</div>';
			$this->setMessage("");
		}
		
    }
}
?>