<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles;");
    $db->close();
	
	foreach($result as $article)
	{
		echo '<a href="read.php?id='. $article['id'] . '">Read</a>' .  $article['title'] . "<br>";
	}



?>