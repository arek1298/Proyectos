<?php

$con=mysqli_connect("localhost","root","","pruebas");

$id=['id'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];


//IMAGEN
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino = "../fotos/".$imagen;
copy($ruta, $destino);


$sql="INSERT INTO productos VALUES('$id','$producto','$precio','$descripcion','$destino')";
echo mysqli_query($con,$sql);

if($sql){

    echo'<script type="text/javascript">
    alert("Producto agregado");
    window.location.href="productos.php";
    </script>';
  
}else {
}
?>