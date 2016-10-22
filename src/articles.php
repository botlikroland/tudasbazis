<?php
	$db = new DB();
	
	$result = $db->query("SELECT * FROM articles;");
	
	foreach($result as $article)
	{
		echo "ID: " . $article['id'] . " Írta: " . $article['ownerid'] . " Dátum: " . $article['date'] . " Szöveg: " . $article['text'] . "<br>";	
	}



?>