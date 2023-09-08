<?php 
	session_start();
	if (isset($_POST['correo']) and isset($_POST['password'])) {

		require_once "../clases/conexion.php";
		$obj = new conectar();
		$conexion = $obj->conexion();
		$user = mysqli_real_escape_string($conexion,$_POST['correo']);
		$contra = mysqli_real_escape_string($conexion,$_POST['password']);

		$sql = 'SELECT * from usuario where correo ="'.$user.'"';
		$comprobar = $conexion->query($sql);
		
		if ($comprobar->num_rows>0) {
			$obtenpass = mysqli_query($conexion,'SELECT id_usuario,password FROM usuario WHERE correo = "'.$user.'"');
			$pass = mysqli_fetch_assoc($obtenpass);
			
			
			
			$password = password_verify($contra, $pass['password']);
			
			if($password){
				$_SESSION['nombre'] = $user;
				$id = $pass['ID_USUARIO'];
				header('location: ../admin.php');
				

			}else{
				print 'Datos incorrectos<br>
				<a href="../">Volver</a>';
			}
		
		}else{
			print 'no se ha encontrado en el registro <br>
			<a href="../">Volver</a>';
		}
	}else{
			header('location: ../');
		 }
 ?>