<?php 
	session_start();
	
	if(empty($_SESSION['nombre'])){
		
 ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Administrador de Quejas</title>
</head>

<body>
<section class="logo">
		<div class="logorr">
			<img src="images/diaco.jpeg" alt="Diaco">
		</div>
	</section>
	<section class="login">
		<div class="col-auto m-5 formularioLogin">
			<form action="procesos/validar.php" method="post" enctype="application/x-www-form-urlencoded">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="email" class="form-control input" id="correo" name="correo"
						aria-describedby="emailHelp" placeholder="user@diaco.gob.gt" required>
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control input" id="password" name="password"
						placeholder="Contraseña" required>
				</div>
				<input type="text" name="id" id="id" hidden>
				<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
				<!--<button type="submit" class="btn btn-primary" onclick="registrar()">Registrarse</button>-->
			</form>
		</div>
	</section>
    
</body>

</html>

<?php 

 	}else{

		
			echo '<script>
		 	window.location.assign("admin.php")
		 </script>';
 
		 
 	}
  ?>