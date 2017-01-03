<?php

class FlashMessage {

    public static function setMessage($message, $level) {
        $_SESSION['flashMessage'] = $message;
		$_SESSION['flashMessageLevel'] = $level;
    }

    public static function show() {		
		if (isset($_SESSION['flashMessage']) && $_SESSION['flashMessage']!=""){

			echo '<div class="alert alert-'.$_SESSION['flashMessageLevel'].'">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				'.$_SESSION['flashMessage'].'
				</div>';
			
			
			FlashMessage::setMessage("","");
		}
		
    }
}
?>