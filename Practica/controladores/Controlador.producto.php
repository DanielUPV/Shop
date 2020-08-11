<?php
    require_once '../dao/Producto.dao.php';
    require_once '../modelos/Producto.php';
    switch($_GET['a']){
        case 'ingr':
            $prod = new Producto();
            $prod->nombre = $_POST['nombre'];
            $prod->descripcion = $_POST['descripcion'];
            $prod->precio = $_POST['precio'];
            $prod->precio_c = $_POST['precio_c'];
            $prod->color = $_POST['color'];
            $prod->categoria = $_POST['categoria'];
            $prod->fabricante = $_POST['fabricante'];
            ProductoDAO::ingresarDatos($prod);
        break;
    }

    header("Location: ../vistas/Vista.producto.index.php");

?>