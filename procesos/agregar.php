<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nit'],
		$_POST['razonSocial'],
		$_POST['direccion'],
		$_POST['nombreSucursal'],
        $_POST['departamentos'],
        $_POST['municipios'],
        $_POST['direccionSucursal']
				);


	echo $obj->agregar($datos);
 ?>