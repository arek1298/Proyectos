<?php

$con=mysqli_connect("localhost","root","","pruebas");


$id=$_GET['id'];

$sql="DELETE FROM productos  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        echo ' Eliminado con exito';
        //Header("Location: usuarios.php");
    }
?>