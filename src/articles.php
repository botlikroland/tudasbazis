<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles WHERE location = " . $_GET['pageid'] . " ORDER BY position");
    $db->close();
	
	echo '<ul id="sortable" class="ui-sortable">';
	foreach($result as $article)
	{
		echo '<li id="position-'.$article['id'].'" class="ui-state-default ui-sortable-handle" >';
		echo '<a href="readarticle.php?articleid='. $article['id'] . '">Megnyit</a>' . ' ';
		echo '<a href="updatearticle.php?articleid='. $article['id'] . '">Módosít</a>' . ' ';
		echo '<a href="deletearticle.php?articleid='. $article['id'] . '">Töröl</a>' . ' ';
		echo $article['title'];
		echo '</li>';
	}	
	echo '</ul>';



?>

