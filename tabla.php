<?php
    session_start();
    $fechaFin = $_POST['fechaFin'];
    $fechaInicio = $_POST['fechaInicio'];

    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    if ($fechaInicio != NULL && $fechaFin != NULL){
      $result = mysqli_query($conexion,"SELECT Q.fecha_queja, Q.detalle_queja, Q.no_factura, Q.fecha_factura, S.nombre_sucursal,Q.id_queja
      from queja Q, sucursal S
      where Q.id_sucursal = S.id_sucursal
      and Q.fecha_queja between '$fechaInicio' and '$fechaFin' order by Q.fecha_queja desc");
    }else{
      $result = mysqli_query($conexion,"SELECT Q.fecha_queja, Q.detalle_queja, Q.no_factura, Q.fecha_factura, S.nombre_sucursal,Q.id_queja
      from queja Q, sucursal S
      where Q.id_sucursal = S.id_sucursal
      order by Q.fecha_queja desc");
    } 
    $extraer = mysqli_fetch_row($result);

    ?>



    <div class="table-responsive">
      <table id="iddatatable" class="table table-hover table-condensed table-striped active" style="text-align:center;">
        <thead>
          <tr>
            <th scope="col-xl-2">#</th>
            <th scope="col-xl-2">Fecha Queja</th>
            <th scope="col-xl-2">Detalle Queja</th>
            <th scope="col-xl-2">No. Factura</th>
            <th scope="col">Fecha Factura</th>
            <th scope="col">Comercio Denunciado</th>
            <th>Cerrar Queja</th>
            <!--boton eliminar eliminado por seguridad
            <th>Eliminar</th>-->
          </tr>
        </thead>

        <tbody>
          <?php for($i=0;$i<$extraer;$i++) { ?>
          <tr>
              <td><?php echo $i+1?></td>
              <td><?php echo$extraer[0];?></td>
              <td><?php echo$extraer[1];?></td>
              <td><?php echo$extraer[2];?></td>
              <td><?php echo$extraer[3];?></td>
              <td><?php echo$extraer[4];?></td>
              <td style="text-align: center;">
              
              <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $extraer[5] ?>')">
              <i class="icon ion-md-checkbox lead mr-1"></i>
              </span>
            </td>
            <!--icono boton eliminar
            <td style="text-align: center;">
              <span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php //echo $mostrar[0] ?>')">
                <span class="fa fa-trash"></span>
              </span>
            </td>-->
          </tr>
          <?php $extraer = mysqli_fetch_array($result);}?>
        </tbody>
      </table>
    </div>

  <script type="text/javascript">
        $(document).ready(function() {
        $('#iddatatable').DataTable();
        } );
    </script>