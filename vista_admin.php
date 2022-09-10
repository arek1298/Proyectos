<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AREK DEV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Mis Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
    
  </div>
</nav>
<div class="jumbotron">
  <h1 class="display-4">Bienvenido Administrador</h1>
  <p class="lead">Tienes el control total del sistema</p>
  <hr class="my-4">
  <p>¿Que deseas hacer?</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="admin/productos.php" role="button">Agregar productos</a>
    <a class="btn btn-dark btn-lg" href="admin/usuarios.php" role="button">Tabla de usuarios</a>
    <a class="btn btn-primary btn-lg" href="admin/tabla.php" role="button">Tabla de productos</a>
    <a class="btn btn-danger btn-lg" href="cerrar.php" role="button">Cerrar sesión</a>
  </p>
</div>
</body>
</html>