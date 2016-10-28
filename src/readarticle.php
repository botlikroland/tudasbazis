<?php
include_once('process.php');

$db = new DB();

$result = $db->query("SELECT * FROM articles WHERE id = " . $_GET['id'] .";");
$db->close();

echo '<a href="main.php">Vissza a főoldalra</a>';

foreach($result as $article)
{
    echo  "<h2>" . $article['title'] . "</h1><br><br>" . $article['text'];
}




?>