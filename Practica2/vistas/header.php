<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index_estudiante.php?m=estudiante">Nuevo registro estudiante</a></li>
              <li class="active"><a href="index_universidad.php?m=universidad">Nuevo registro universidad</a></li>
              <li class="active"><a href="index_carrera.php?m=carrera">Nuevo registro carrera</a></li>

              <li class="dropdown">
                <a href="index_estudiante.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar estudiantes <span class="caret"></span></a>
              </li>
              <li class="dropdown">
                <a href="index_universidad.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar universidades <span class="caret"></span></a>
              </li>
              <li class="dropdown">
                <a href="index_carrera.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar carreras <span class="caret"></span></a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>