<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles WHERE location = " . $_GET['pageid']);
    $db->close();
	
	foreach($result as $article)
	{
		echo '<a href="readarticle.php?articleid='. $article['id'] . '">Megnyit</a>' . ' ';
		echo '<a href="updatearticle.php?articleid='. $article['id'] . '">Módosít</a>' . ' ';
		echo '<a href="deletearticle.php?articleid='. $article['id'] . '">Töröl</a>' . ' ';
		echo $article['title'] . "<br>";
	}	



?>