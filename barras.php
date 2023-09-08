<?php
    session_start();
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    $nit = $_POST['nit'];

    if($nit != NULL){

        $sql="SELECT count(Q.id_queja) cantidad_quejas, D.nombre_departamento
        from queja Q, departamento D, sucursal S, municipio M, comercio C
        where Q.id_sucursal = S.id_sucursal
        and S.id_municipio = M.id_municipio
        and M.id_departamento = D.id_departamento
        and S.id_comercio = C.id_comercio
        and C.nit_comercio = '$nit' group by D.nombre_departamento";
    }else{
        $sql="SELECT count(Q.id_queja) cantidad_quejas, D.nombre_departamento
        from queja Q, departamento D, sucursal S, municipio M, comercio C
        where Q.id_sucursal = S.id_sucursal
        and S.id_municipio = M.id_municipio
        and M.id_departamento = D.id_departamento
        and S.id_comercio = C.id_comercio group by D.nombre_departamento";
        //and C.nit_comercio = '$nit' group by D.nombre_departamento";

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

<div id="graficaBarras"></div>

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
  title: 'Cantidad de quejas por departamento',
  barmode: 'stack'
};

    Plotly.newPlot('graficaBarras', data,layout);

</script>