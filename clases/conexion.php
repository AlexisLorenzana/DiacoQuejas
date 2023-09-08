<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',//User
										'root',//Password
										'diaco');//DB name
            $conexion->set_charset('utf8');
			return $conexion;
		}
	}


 ?>