<?php
    session_start();
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    $sql="SELECT count(Q.id_queja) cantidad, C.razon_social nombre
    from queja Q, comercio C, sucursal S
    where Q.id_sucursal = S.id_sucursal
    and S.id_comercio = C.id_comercio group by C.razon_social";

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

<div id="graficaLineal"></div>

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


    var trace1 = {
  x: datosX,
  y: datosY,
  type: 'scatter'
};

var layout = {
  title:'Cantidad de quejas por comercio en el año 2021'
};


var data = [trace1];

Plotly.newPlot('graficaLineal', data, layout);


</script>