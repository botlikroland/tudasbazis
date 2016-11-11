<?php
	include_once('process.php');
	$names = Utilities::GetNameList();
	
?>

<html>
	<head>
		<title>[Admin] Jelszó változtatás</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	</head>
	<body>
	
<?php
	include_once('menu.php');
?>

	<form action="index.php" method="post" class="form-horizontal">
		<fieldset>
			<legend>[Admin] Felhasználó kezelés</legend>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="user">Felhasználó</label>
				<div class="col-md-4">
					<select class="selectpicker" data-live-search="true" name="selectedname">
						<?php echo $names; ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="change"></label>
				<div class="col-md-8">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModModal">Módosít</button>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userDelModal">Felhasználó törlés</button>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="change"></label>
				<div class="col-md-8">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#userNewModal">Új felhasználó</button>
				</div>
			</div>
			
		</fieldset>
	</form>
	

<div class="modal fade" id="userModModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Felhasználó módosítás</h4>
      </div>
      <div class="modal-body">
        asd
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mégse</button>
        <button type="button" class="btn btn-success">Módosít</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="userDelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Felhasználó törlés</h4>
      </div>
      <div class="modal-body">
        Biztosan törölni szeretnéd a felhasználót?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mégse</button>
        <button type="button" class="btn btn-danger">Töröl</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="userNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Felhasználó felvitel</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mégse</button>
        <button type="button" class="btn btn-success">Rögzít</button>
      </div>
    </div>
  </div>
</div>

	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	</body>
</html>