<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombreSucursal'],
        $_POST['departamento'],
        $_POST['municipio'],
        $_POST['direccionSucursal'],
        $_POST['id_comercio']
				);


	echo $obj->agregarSucursal($datos);
 ?>