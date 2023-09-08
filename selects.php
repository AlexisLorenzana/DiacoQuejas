<?php
require_once "clases/conexion.php";

$departamentos = filter_input(INPUT_POST, 'departamentos'); 
$departamento = filter_input(INPUT_POST, 'departamento'); 


$obj = new conectar();
$conexion=$obj->conexion();

if($departamento == NULL){
    $result = mysqli_query($conexion,"SELECT id_municipio, nombre_municipio from municipio where id_departamento='$departamentos'");
}else{
    $result = mysqli_query($conexion,"SELECT id_municipio, nombre_municipio from municipio where id_departamento='$departamento'");
}



//$extraer = mysqli_fetch_row($result);

    echo '<option value="0">Seleccione una opción</option>';

while ($extraer = mysqli_fetch_row($result)) {

    echo '<option value="'.$extraer[0].'">'.$extraer[1].'</option>';

}
      
    



?>


	
