<?php $con=mysqli_connect("localhost","root","","pruebas");

$sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
           

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>Producto</th>
                                        <th>precio</th>
                                        <th>Descripcíon</th>
                                        <th>IMAGEN</th>
                                       
                                       
                                        <th></th>
                                        <th></th>
                                      
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo '<img width="80px" src="'.$row['imagen'].'">'?></th>
                                                <th><?php  echo $row['producto']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                 
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>