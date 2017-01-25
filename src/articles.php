<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles WHERE location = " . $_GET['pageid'] . " ORDER BY position");
    $db->close();
	
	echo '<ul id="sortable" class="ui-sortable">';
	foreach($result as $article)
	{
		if ($article['type'] == 'normal'){
			echo '<li id="position-'.$article['id'].'" class="ui-state-default ui-sortable-handle" >';
			echo '<a href="updatearticle.php?articleid='. $article['id'] . '&location=' . $_GET['pageid'] . '"><span class="glyphicon glyphicon-pencil"></span></a>' . ' ';
			echo '<a href="deletearticle.php?articleid='. $article['id'] . '&location=' . $_GET['pageid'] . '"><span class="glyphicon glyphicon-trash"></span></a>' . ' ';
			echo '<a href="readarticle.php?articleid='. $article['id'] . '">'.$article['title'].'</a>';

		}
		elseif($article['type'] == 'title'){
			echo '<li style="list-style-type: none;" id="position-'.$article['id'].'" class="ui-state-default ui-sortable-handle" >';
			echo '<a href="updatetitle.php?articleid='. $article['id'] .  '&location=' . $_GET['pageid'] . '"><span class="glyphicon glyphicon-pencil"></span></a>' . ' ';
			echo '<a href="deletetitle.php?articleid='. $article['id'] .  '&location=' . $_GET['pageid'] . '"><span class="glyphicon glyphicon-trash"></span></a>' . ' ';
			echo $article['text'];
		}
		
	}	
	echo '</ul>';



?>

