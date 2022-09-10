<?php 
   $con=mysqli_connect("localhost","root","","pruebas");

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($query))
?>