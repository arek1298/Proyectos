<?php include 'login.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio sesión</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
	<br>
	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hola, Bienvenido a nuestra tienda</h1>
	<form  method="post" class="form">
<label>Usuario</label>
		<p></p>
		<input type="text" name="usuario" id="usuario" class="form-control">
		<p></p>
		<label>password</label>
		<p></p>
		<input type="password" name="password" id="password" class="form-control">
        <button type="submit" name="iniciar" class="btn btn-success">Iniciar Sesión</button></center>
        <a href="index.php">Regístrate</a>

		<a href="index.php">Home</a>
        <br>
        </form>
    
  </div>
</div>
<style>
	.form-control{
		width: 300px;
		position: center;
	}
	.display-4{
		text-align: center;
	}
	.form{
		align: center;
	}
	.jumbotron jumbotron-fluid{
		width: 250px;
	}
</style>


	