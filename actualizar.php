

<?php
session_start();
include 'db.php';
include 'consulta.php';

$id=$_POST['id'];

$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];

    $sql="UPDATE usuarios SET id='$id', nombre='$nombre',apellido='$apellido',usuario='$usuario' WHERE id='$id'";
$query=mysqli_query($cnx,$sql);

    if($query){
        Header("Location: home.php");
    }
?>

?>

