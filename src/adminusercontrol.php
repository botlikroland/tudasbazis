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
					<select id="selectedname" class="selectpicker" data-live-search="true" name="selectedname">
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
		<form action="index.php" method="post" class="form-horizontal">
		<div class="modal-body">
			<fieldset>
				<input name="userid" type="hidden" class="form-control input-md" id="userid">
			
				<div class="form-group">
					<label class="col-md-4 control-label" for="lastname">Vezetéknév</label>
					<div class="col-md-4">
						<input name="lastname" type="text" class="form-control input-md" id="lastname">
					</div>
				</div>
		
				<div class="form-group">
					<label class="col-md-4 control-label" for="firstname">Keresztnév</label>
					<div class="col-md-4">
						<input name="firstname" type="text" class="form-control input-md" id="firstname">
					</div>
				</div>
		
				<div class="form-group">
					<label class="col-md-4 control-label" for="email">E-mail</label>
					<div class="col-md-4">
						<input name="email" type="text" class="form-control input-md" id="email">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label" for="newpw">Jelszó</label>
					<div class="col-md-4">
						<input name="newpw" type="password" class="form-control input-md" id="newpw">
					</div>
				</div>
			</fieldset>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Mégse</button>
			<button type="submit" name="adminupdateuser" class="btn btn-success">Módosít</button>
		</div>
	  </form>
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
	<script>
$("#userModModal").on("shown.bs.modal", function (event) {
	var id = $("#selectedname").val();
	var modal = $(this);
	$.ajax({
		type: 'POST',
		url: 'process.php',
		data: "adminupdateuserid=" + id,
		dataType: 'json',
		success: function(data)
		{	
			modal.find(".modal-body #userid").val(id);
			modal.find(".modal-body #lastname").val(data.lastname);
			modal.find(".modal-body #firstname").val(data.firstname);
			modal.find(".modal-body #email").val(data.email);
			modal.find(".modal-body #newpw").val('');
		},
		error: function(jqXHR, textStatus, errorThrown){
          alert(errorThrown);
		}   
	});
});
</script>
	</body>
</html>