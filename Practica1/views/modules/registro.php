<h1>REGISTRO DE USUARIO</h1>


<form method="post">
  <div class="form-group">
  <input class="form-control" type="text" placeholder="usuario" name="usuarioRegistro" required>
  </div>
  <div class="form-group">
  <input class="form-control" type="email" placeholder="email" name="emailRegistro" required>
  </div>
  <div class="form-group">
  <input class="form-control" type="password" placeholder="password" name="passwordRegistro" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>

<?php
    //ENVIAR LOS PARAMETROS DEL REGISTRO AL CONTROLADOR
    $registro = new MvcController();
    $registro->registroUsiaroController();

    if(isset($_GET['action'])){
        if($_GET['action'] == 'ok'){
            echo 'Registro exitoso.';
        }
    }
    