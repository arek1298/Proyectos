<?php
session_start();
include 'db.php';
include 'consulta.php';
$sql="SELECT *  FROM productos";
    $query=mysqli_query($cnx,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!--alerta-->
<div class="alert alert-danger position-absolute d-inline-flex p-2" role="alert">
<p>La sesión expira en:&nbsp <div id="number" class="text"></div></p>
</div>
<script type="text/javascript">
 n = 10
 var l= document.getElementById("number");
 var id = window.setInterval(function(){

 
 document.onmousemove = function(){
  n=10
 };
 l.innerText = n;
 n--;
 if(n<= -1){
alert("Sesión expiró");
location.href="cerrar.php";
 }
},1200);

</script>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hola: <?php echo $ark['nombre'];?></h1> 
    
    <p class="lead">Disfruta de nuestra tienda.</p>
   
    <a href="cerrar.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"><i class="fa fa-sign-out"></i> Cerrar sesión</a>
  </div>
</div>

<!---A QUI ACABA EL JOMBOTRON-->
<div class="alert alert-dark" role="alert">
 <h1><center> Checa nuestros productos</h1></center>
</div>

<!--COMIENZA LOS PRODUCTOS-->
<div class="container mt-3">
        <div class="row">

<?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="fotos/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['producto'] . " " 
                            . $row['descripcion']; ?></h5>
                            <p class="card-text">
                                PRECIO  :<?php echo $row['precio']; ?>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fa fa-credit-card"></i> Comprar</a>
                            <a href="#" class="btn btn-success"> <i class="fa fa-car"></i> Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>