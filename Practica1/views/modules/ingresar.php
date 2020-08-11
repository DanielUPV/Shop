<h1>INGRESAR</h1>
	<form method="post">
  <div class="form-group">
  <input class="form-control" type="text" placeholder="usuario" name="usuarioIngreso" required>
  </div>
  <div class="form-group">
  <input class="form-control" type="password" placeholder="password" name="passwordIngreso" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>

<?php
	$ingreso = new MvcController();
	$ingreso->ingresoUsuarioController();

	if(isset($_GET["action"])){
		if($_GET["action"]=="fallo"){
			echo "Fallo al ingresar";
		}
	}
?>