<?php
    session_start();
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    $nit = $_POST['nit'];
    $departamento = $_POST['departamentos'];

    if($departamento != NULL){
      $sql="SELECT count(Q.id_queja) cantidad_quejas, M.nombre_municipio
      from queja Q, sucursal S, municipio M, comercio C, departamento D
      where Q.id_sucursal = S.id_sucursal
      and S.id_comercio = C.id_comercio
      and S.id_municipio = M.id_municipio
      and D.id_departamento = '$departamento'
      and D.id_departamento = M.id_departamento group by M.nombre_municipio";

    }else if($departamento != NULL && $nit != NULL){

      $sql="SELECT count(Q.id_queja) cantidad_quejas, M.nombre_municipio
      from queja Q, sucursal S, municipio M, comercio C, departamento D
      where Q.id_sucursal = S.id_sucursal
      and S.id_comercio = C.id_comercio
      and S.id_municipio = M.id_municipio
      and D.id_departamento = M.id_departamento
      and D.id_departamento = '$departamento' 
      and C.nit_comercio = '$nit' group by M.nombre_municipio";
    }

    
    $result = mysqli_query($conexion,$sql);

    $valoresY=array();//cantidad
    $valoresX=array();//nombres

    while($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[0];
        $valoresX[]=$ver[1];

    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);

?>

<div id="cargarMunicipio"></div>

<script>
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script>

    datosX = crearCadenaLineal('<?php echo $datosX?>');
    datosY = crearCadenaLineal('<?php echo $datosY?>');

var data = [
  {
    x: datosX,
    y: datosY,
    type: 'bar'
  }
];

var layout = {
  title:'Cantidad de quejas por Municipio'
};

Plotly.newPlot('cargarMunicipio', data, layout);
</script>