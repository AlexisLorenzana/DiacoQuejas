<?php 

	//session_start();
	//$_SESSION['nombre'];

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="INSERT INTO comercio (nit_comercio,razon_social,direccion)
											values ('$datos[0]',
                                                    '$datos[1]',
                                                    '$datos[2]')";
            
			mysqli_query($conexion,$sql);

			$id = mysqli_insert_id($conexion);

			$sql1 = "INSERT INTO sucursal(nombre_sucursal,id_comercio,id_municipio,direccion) 
                        VALUES ('$datos[3]',
                                '$id',
                                '$datos[5]',
                                '$datos[6]')";
			
			return mysqli_query($conexion,$sql1);

		}

		public function agregarSucursal($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql = "INSERT INTO sucursal(nombre_sucursal,id_comercio,id_municipio,direccion) 
                        VALUES ('$datos[0]',
                                '$datos[4]',
                                '$datos[2]',
                                '$datod[3]')";
			
			return mysqli_query($conexion,$sql);

		}

		public function agregarCord($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="INSERT INTO TRABAJO_ORDEN(DESCRIPCION,FECHA,ENTRADA_PROCESO,ID_NIVEL,ID_USUARIO,ID_CLIENTE,ID_MATERIAL)
											values ('$datos[0]',
											CURDATE(),
											1,
											1,
											'$datos[3]',
											'$datos[1]',
											'$datos[2]');";
            
			return mysqli_query($conexion,$sql);

			//$id = mysqli_insert_id($conexion);

			//$sql1 = "INSERT INTO HISTORIAL_ENTREGA (ID_ACTIVO,FECHA,ENCARGADO_ACTUAL) VALUES ('$id',NOW(),'$datos[12]');";
			
			//return mysqli_query($conexion,$sql1);

		}

		public function agregarMaterial($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			
			$sql="INSERT INTO MATERIAL(NOMBRE_MATERIAL) values (UPPER('$datos[0]'));";
            
			return mysqli_query($conexion,$sql);

			//$id = mysqli_insert_id($conexion);

			//$sql1 = "INSERT INTO HISTORIAL_ENTREGA (ID_ACTIVO,FECHA,ENCARGADO_ACTUAL) VALUES ('$id',NOW(),'$datos[12]');";
			
			//return mysqli_query($conexion,$sql1);

		}


		public function obtenDatos($idtarea){
			$obj= new conectar();
			$conexion=$obj->conexion();

			/*$sql="SELECT id_activo,
							nombre_activo,
							marca,
							modelo,
							caracteristicas,
							observacion,
							ubicacion,
							estatus
					from activo 
					where codigo='$idactivo'";*/
			$sql = "SELECT ID_ORDEN, DESCRIPCION, ENTRADA_PROCESO, ID_NIVEL FROM TRABAJO_ORDEN
					WHERE ID_ORDEN = '$idtarea'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'ID_ORDEN' => $ver[0],
				'DESCRIPCION' => $ver[1],
				'ENTRADA_PROCESO' => $ver[2],
				'ID_NIVEL' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "UPDATE TRABAJO_ORDEN set DESCRIPCION = '$datos[0]',
									  ENTRADA_PROCESO = '$datos[1]',
									  ID_NIVEL = '$datos[2]'
					where ID_ORDEN = '$datos[3]';";
			
			//mysql_query($conexion,$sql);

						
			return mysqli_query($conexion,$sql);

			/* ejecutar multi consulta 
			if (mysqli_multi_query($conexion, $sql)) {

			    do {
			        /* almacenar primer juego de resultados 
			        if ($result = mysqli_store_result($conexion)) {
			            
			            mysqli_free_result($result);

			        }
			        return mysqli_next_result($conexion);
			        
			    } while (mysqli_next_result($conexion));
   
			}*/
			
		}
		public function eliminarDatos($idtarea){
			
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "DELETE FROM TRABAJO_ORDEN where ID_ORDEN = '$idtarea';";
			
			//mysql_query($conexion,$sql);

						
			return mysqli_query($conexion,$sql);

			/* ejecutar multi consulta 
			if (mysqli_multi_query($conexion, $sql)) {

			    do {
			        /* almacenar primer juego de resultados 
			        if ($result = mysqli_store_result($conexion)) {
			            
			            mysqli_free_result($result);

			        }
			        return mysqli_next_result($conexion);
			        
			    } while (mysqli_next_result($conexion));
   
			}*/
			
		}
	}
 ?>