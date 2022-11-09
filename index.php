<!DOCTYPE html>
<html>
<head>
	<title>Regístro de usuarios</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
	  <form id="frmajax" method="POST">
	  <div class="jumbotron jumbotron-fluid">
  <div class="container">
	 
		<label>Nombre</label>
		<p></p>
		<input type="text" name="nombre" id="nombre" class="form-control">
		<p></p>
		<label>apellido</label>
		<p></p>
		<input type="text" name="apellido" id="apellido" class="form-control">
		<p></p>
		<label>Usuario</label>
		<p></p>
		<input type="text" name="usuario" id="usuario" class="form-control">
		<p></p>
		<label>password</label>
		<p></p>
		<input type="password" name="password" id="password" class="form-control">
		<p></p>
		<button id="btnguardar" class="btn btn-primary">Guardar datos</button><br>
		<br>
		<a name="" id="" class="btn btn-primary" href="iniciar.php" role="button">Inicio</a>
	</form>
	
	
	  </div>
	</div>
	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php",
				data:datos,
				success:function(r){
					if(r==1){
						//alert("agregado con exito");
						Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Regístrado con éxito',
  showConfirmButton: false,
  timer: 2000
 
})
					}else{
						//alert("Fallo el server");
						Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Intentar nuevamente',
  showConfirmButton: false,
  timer: 1500
})
					}
				}
			});

			return false;
		});
	});
</script>

