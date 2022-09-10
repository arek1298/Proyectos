<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
require_once 'db.php';
require_once 'scripts.php';


# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['iniciar']))
{
	# Se guarda el contendio de las cajas de texto en las variables $us y $ps
	$us=$_POST['usuario'];
	$ps=$_POST['password'];
	
	# Se valida que las variables no esten vacias o nulas
	if (!empty($us) &&  !empty($ps))
	{
		# Query de consulta
		$query = "SELECT * from usuarios WHERE usuario='".$us."' AND password='".$ps."'";

		# Asigna el registro del Query
		$registro=mysqli_query($cnx,$query);

		# Asigna los datos del registro a la variable $campo
		$campo=mysqli_fetch_array($registro);

		# Cuenta la cantidad de registros del Query
		$count=mysqli_num_rows($registro);

		# Valida que la variable count tenga un valor
		if($count)	
		{	
			if ($campo['usuario']=="admin" AND $campo['password'] == $ps)
			{
				$_SESSION['usuario'] = $campo['usuario'];
				header("location:vista_admin.php");	
			}
			else
			{
				$_SESSION['usuario'] = $campo['usuario'];
				$_SESSION['usuario'] = $campo['usuario'];
				header("location:menu.php");	
			}	
		} 
		else
		{
			//echo "<div class='alert alert-danger'>
		    //<strong><h4>Ha surgido un Error<br>Verifica las credenciales de Acceso!</strong></div>";

            echo '<script>
            Swal.fire({
             icon: "error",
             title: "Lo sentimos...",
             text: "¡Verificar credenciales de acceso!",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                if(result.value){                   
                 window.location = "iniciar.php";
                }
             });
            </script>';
        }
		
	}
}
?>

