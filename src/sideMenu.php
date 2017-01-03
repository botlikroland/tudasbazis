<?php
class sideMenu {

	public static function show() {

		$db = new DB();
		
		$result = $db->query("SELECT id,title FROM menu WHERE parentId = 0");
		$db->close();
		
		foreach($result as $element)
		{
			echo '<li>'
			.'<a href="#" aria-expanded="false">'. $element['title'];
			
			$db = new DB();
			if($subResult = $db->query("SELECT title, parentId FROM menu WHERE parentId = ".$element['id'])){
				echo '<span class="fa arrow"></span></a>';
				echo '<ul>';
				foreach($subResult as $subElement){
					echo '<li>'
						.'<a href="#" aria-expanded="false">'. $subElement['title'] . '</a>'
						.'</li>';
				}
				echo '</ul>';
			}
			else{
				echo '</a>';
			}
			$db->close();
			echo '</li>';
		}
	}






}
?>