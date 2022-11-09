<?php
session_start();
include 'db.php';
include 'consulta.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br>
<center>

<div class="b-3card bg-dark m" style="width: 550px; bakground-color: black;">
  <div class="card-header"><h1 style="color: white;">Datos del usuario:</h1></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action="actualizar.php" method="post">
   <label style="color: white;">Nombre:</label><input type="text" class="form-control" name="nombre" value="<?php echo $ark['nombre']?>">
   <label style="color: white;">Apellido:</label><input type="text" class="form-control" name="apellido" value="<?php echo $ark['apellido']?>">
   <label style="color: white;">Usuario:</label><input type="text" class="form-control" name="usuario" value="<?php echo $ark['usuario']?>">
   <label style="color: white;">Contraseña:</label><input type="text" class="form-control" name="usuario" value="<?php echo $ark['password']?>">
  <br>
   <a class="btn btn-warning"  href="actualizar.php?id=<?php echo $ark['id'];?>"><i class="fa fa-refresh"></i> Actualizar</a>
<a class="btn btn-danger" href="eliminar.php?id=<?php echo $ark['id'];?>"><i class="fa fa-trash"></i> Eliminar Perfil</a>

</form>
  </div>
</div>
<a class="btn btn-light" href="menu.php"> <i class="fa fa-reply"></i>  Regresar</a>
<a class="btn btn-success" href="menu.php"> <i class="fa fa-home"></i> Ir al menú</a>
</center>
</body>
</html>