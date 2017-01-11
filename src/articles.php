<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles WHERE location = " . $_GET['id'] . ";");
    $db->close();
	
	foreach($result as $article)
	{
		echo '<a href="readarticle.php?id='. $article['id'] . '">Megnyit</a>' . ' ';
		echo '<a href="updatearticle.php?id='. $article['id'] . '">Módosít</a>' . ' ';
		echo '<a href="deletearticle.php?id='. $article['id'] . '">Töröl</a>' . ' ';
		echo $article['title'] . "<br>";
	}



?>