<?php
include_once('process.php');
$nev = Utilities::GetNameById();



?>


<nav role="navigation" class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Tudásbázis</a>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <!-- Bal oldali gombok helye, ha kell majd -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
			<li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span><?php echo $nev ?></li>
			<?php if(Utilities::HasPermission($_SESSION['userid'],'admin')) { ?>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="adminusercontrol.php">Felhasználó kezelés</a></li>
					</ul>
				</li>
			<?php } ?>
			<li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle">Beállítások <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="changepw.php">Jelszó változtatás</a></li>
                </ul>
            </li>
            <li><a href="index.php?logout=1">Kijelentkezés</a></li>
        </ul>
	</div>
</nav>