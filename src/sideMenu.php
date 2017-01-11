<?php
class sideMenu {

	public static function show() {

	echo '<div class="clearfix">'.
    	 	'<aside class="sidebar">'.
      	 		'<nav class="sidebar-nav">'.
         			'<ul class="metismenu" id="menu">';

		$db = new DB();
		
		$result = $db->query("SELECT id,title FROM menu WHERE parentId = 0");
		$db->close();
		
		foreach($result as $element) {
			echo '<li';

			if (isset($_GET['pageid'])){
				$db = new DB();
		
				$parentCheck = $db->query("SELECT parentId FROM menu WHERE id = " . $_GET['pageid']);
				$db->close();
				if ($parentCheck[0]['parentId'] == $element['id']){
					echo ' class="active"';
				}
			}
			if (isset($_GET['articleid'])){
				$db = new DB();
		
				$location = $db->query("SELECT location FROM articles WHERE id = " . $_GET['articleid']);
				$db->close();
				$db = new DB();
		
				$parentCheck = $db->query("SELECT parentId FROM menu WHERE id = " . $location[0]['location']);
				$db->close();
				if ($parentCheck[0]['parentId'] == $element['id']){
					echo ' class="active"';
				}
			}

			echo '>'
			.'<a';

			if (isset($_GET['pageid'])){
				if ($_GET['pageid'] == $element['id']){
					echo ' style="color:red;"';
				}
			}

			if (isset($_GET['articleid'])){
				$db = new DB();
		
				$location = $db->query("SELECT location FROM articles WHERE id = " . $_GET['articleid']);
				$db->close();
				if ($location[0]['location'] == $element['id']){
					echo ' style="color:red;"';
				}
			}


			echo ' href="page.php?pageid=' . $element['id'] . '">'. $element['title'];
			
			$db = new DB();
			if($subResult = $db->query("SELECT title, id FROM menu WHERE parentId = ".$element['id'])) {
				echo '<span class="fa arrow"></span></a>';
				echo '<ul>';
				foreach($subResult as $subElement){
					echo '<li>'
						.'<a';

					if (isset($_GET['pageid'])){
						if ($_GET['pageid'] == $subElement['id']){
							echo ' style="color:red;"';
						}
					}

					if (isset($_GET['articleid'])){
						$db = new DB();
						$location = $db->query("SELECT location FROM articles WHERE id = " . $_GET['articleid']);
						if ($location[0]['location'] == $subElement['id']){
							echo ' style="color:red;"';
						}
					}

					echo ' href="page.php?pageid=' . $subElement['id'] . '">' . $subElement['title'] . '</a>'
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

		echo 		'</ul>'.
      			'</nav>'.
    		'</aside>'.
		'</div>';
	}
}
?>