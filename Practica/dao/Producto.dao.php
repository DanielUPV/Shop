<?php
    require_once '../modelos/Conexion.php';

    class ProductoDAO {
        public static function listarDatos(){
            $con = new Conexion();
            $cont = $con->ejecutarConsulta("SELECT * FROM Producto");
            $con->cerrarConexion();
            return $cont;
        }

        public static function ingresarDatos($prod){
            $con = new Conexion();
            $con->ejecutarActualizaciones("INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `precio c`, `color`, `id_categoria`, `id_fabricante`) VALUES (NULL, '".$prod->nombre."', '".$prod->descripcion."', '".$prod->precio."', '".$prod->precio_c."', '".$prod->color."', '".$prod->categoria."', '".$prod->fabricante."');");
            $con->cerrarConexion();
        }
    }

?>