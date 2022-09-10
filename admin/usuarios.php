<?php 
    include '../db.php';
   

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($cnx,$sql);
?>

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
  <a href="../vista_admin.php">Volver</a>
  <hr>
<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">USUARIO</th>
      <th scope="col">ACCIONES</th>
      

    </tr>
  </thead>
  <tbody>
  <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
    <tr>
   
    <td><?php echo $row['id']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['apellido']?></td>
      <td><?php echo $row['usuario']?></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Eliminar</a></td>
     
     
     
    </tr>
    
    </tr>
  </tbody>
  <?php 
                                            }
                                        ?>
</table>