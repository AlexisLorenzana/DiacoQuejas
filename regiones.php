<?php
    session_start();
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    $nit = $_POST['nit'];

    if($nit != NULL){
      $sql="SELECT count(Q.id_queja) cantidad_quejas, D.region
      from queja Q, sucursal S, municipio M, comercio C, departamento D
      where Q.id_sucursal = S.id_sucursal
      and S.id_comercio = C.id_comercio
      and S.id_municipio = M.id_municipio
      and D.id_departamento = M.id_departamento 
      and C.nit_comercio = '$nit' group by D.region";
    }else{
      $sql="SELECT count(Q.id_queja) cantidad_quejas, D.region
      from queja Q, sucursal S, municipio M, comercio C, departamento D
      where Q.id_sucursal = S.id_sucursal
      and S.id_comercio = C.id_comercio
      and S.id_municipio = M.id_municipio
      and D.id_departamento = M.id_departamento group by D.region";
    //and C.nit_comercio = '$nit' group by D.region";

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

<div id="cargarRegion"></div>

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
    type: 'scatter'
  }
];

var layout = {
  title:'Cantidad de quejas por Región'
};

Plotly.newPlot('cargarRegion', data, layout);
</script>