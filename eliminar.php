<?php

include("db.php");


$id=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$id'";
$query=mysqli_query($cnx,$sql);

    if($query){
        
        Header("Location: iniciar.php");
    }
?>