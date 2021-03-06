<!DOCTYPE html>
<?php require_once '../dao/Producto.dao.php' ?>

<html>

    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <h1>Productos</h1>
        <h2>Lista</h2>

        <a href="Vista.producto.ingresar.php">Ingresar nuevo</a>

        <table>
            <tr>        
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio venta</th>
                <th>Precio compra</th>
                <th>Color</th>
                <th>Opciones</th>
            </tr>
            <?php foreach(ProductoDAO::listarDatos() as $key => $fila):?> 
                <tr>
                    <td>
                        <?= $fila[1]?>
                    </td>
                    <td>
                        <?= $fila[2]?>
                    </td>
                    <td>
                        <?= $fila[3]?>
                    </td>
                    <td>
                        <?= $fila[4]?>
                    </td>
                    <td>
                        <?= $fila[5]?>
                    </td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>