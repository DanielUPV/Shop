<?php
	//modelo de enlaces web
	class Paginas{
		public static function enlacesPaginasModel($enlaces){
			if(($enlaces)== "ingresar" || ($enlaces)== "usuarios" || ($enlaces)== "productos" || ($enlaces)== "registroProducto" || ($enlaces)== "editar" || ($enlaces)== "editarProducto" || ($enlaces)== "salir" || ($enlaces)== "categorias" || ($enlaces)== "registroCategorias" || ($enlaces)== "editarCategoria"){
				$module="views/modules/".$enlaces.".php";
			}else if ($enlaces=="index"){
				$module="views/modules/registro.php";
			}else if ($enlaces=="ok"){
				$module="views/modules/registro.php";
			}else if ($enlaces=="okC"){
				$module="views/modules/categorias.php";
			}else if ($enlaces=="fallo"){
				$module="views/modules/registro.php";
			}else if ($enlaces=="cambio"){
				$module="views/modules/usarios.php";
			}else if ($enlaces=="cambioC"){
				$module="views/modules/categorias.php";
			}else {
				$module="views/modules/registro.php";
			}

			return $module;

		}
	}
?>