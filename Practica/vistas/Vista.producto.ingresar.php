<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <h1>Productos</h1>
        <h2>Ingresar</h2>

        <a href="Vista.producto.index.php">Lista</a>

        <form action="../controladores/Controlador.producto.php?a=ingr" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required />
            <input type="text" name="descripcion" placeholder="Descripcion" required />
            <input type="text" name="precio" placeholder="Precio venta" required />
            <input type="text" name="precio_c" placeholder="Precio compra" required />
            <input type="text" name="color" placeholder="Color" required />
            <input type="text" name="categoria" placeholder="Categoria" required />
            <input type="text" name="fabricante" placeholder="Fabricante" required />
            <input type="submit" value="Ingresar"/>
        </form>
    </body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>