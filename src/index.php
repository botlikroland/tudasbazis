<?php
include_once('process.php');





?>

<html>
	<head>
		<title>Főoldal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
		<link rel="stylesheet" href="metisMenu.min.css">
		<link rel="stylesheet" href="demo.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/themes/prism.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>

<div class="clearfix">
    <aside class="sidebar">
      <nav class="sidebar-nav">
        <ul class="metismenu" id="menu">
          <li>
            <a href="#" aria-expanded="false">
              <span class="sidebar-nav-item">Platformok</span>
              <span class="fa arrow"></span>
            </a>
            <ul aria-expanded="false">
              <li><a href="#">profession.hu</a></li>
              <li><a href="#">jobmonitor.hu</a></li>
              <li><a href="#">munkatarsaim.hu</a></li>
			  <li><a href="#">mobil applikációk</a></li>
			  <li><a href="#">mobil munka</a></li>
            </ul>
          </li>
          <li>
            <a href="#" aria-expanded="false">ÁSZF, EAT, FF</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Termékek és szolgáltatások</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Programok használata</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Értékesítés</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Hirdetésszerkesztés és szolgáltatások beállítása</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Moderálás</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Számlázás</a>
          </li>
		  <li>
            <a href="#" aria-expanded="false">Ügyfélkapcsolatok</a>
          </li>
        </ul>
      </nav>
    </aside>
</div>


<?php
include_once('articles.php');
?>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="metisMenu.min.js"></script>
    <script>
		$(function() {
			$('#menu').metisMenu();
		});
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>
	</body>
</html>