<?php 
include 'db.php';

$usuario= $_SESSION['usuario'];
$sql="SELECT * from usuarios WHERE usuario='$usuario'" ;
$registro=mysqli_query($cnx,$sql);

$ark=mysqli_fetch_array($registro);


?>