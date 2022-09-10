<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
    <body>
    <div class="jumbotron">
    <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST" enctype="multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="producto" placeholder="producto">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <textarea class="form-control" name="descripcion"  rows="3"></textarea>
                                    
                                    <input type="file" class="form-control mb-3" name="imagen" placeholder="imagen">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a class="btn btn-dark btn-lg" href="tabla.php" role="button">Ver tabla</a>
                                </form>
  </p>
</div>
</body>
</html>