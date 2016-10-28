<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles;");
    $db->close();
	
	foreach($result as $article)
	{
		echo '<a href="read.php?id='. $article['id'] . '">Megnyit</a>' . ' ';
		echo '<a href="update.php?id='. $article['id'] . '">Módosít</a>' . ' ';
		echo '<a href="read.php?id='. $article['id'] . '">Töröl</a>' . ' ';
		echo $article['title'] . "<br>";
	}



?>