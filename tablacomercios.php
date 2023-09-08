<?php
    session_start();
   
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    
      $result = mysqli_query($conexion,"SELECT * from comercio");
   
    $extraer = mysqli_fetch_row($result);

    ?>



    <div class="table-responsive">
      <table id="iddatatable" class="table table-hover table-condensed table-striped active" style="text-align:center;">
        <thead>
          <tr>
            <th scope="col-xl-2">No.</th>
            <th scope="col-xl-2">Nit</th>
            <th scope="col-xl-2">Razón Social</th>
            <th scope="col">Dirección</th>
            <th scope="col">Agregar Sucursal</th>
            <th scope="col">Ver Sucursales</th>
          </tr>
        </thead>

        <tbody>
          <?php for($i=0;$i<$extraer;$i++) { ?>
          <tr>
              <td><?php echo$extraer[0];?></td>
              <td><?php echo$extraer[1];?></td>
              <td><?php echo$extraer[2];?></td>
              <td><?php echo$extraer[3];?></td>
              <td style="text-align: center;">
              
              <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearSucursal" onclick="id_comercio('<?php echo $extraer[0] ?>')">
              <i class="icon ion-md-checkbox lead mr-1"></i>
              </span>
            </td>
            <td>
            <span class="btn btn-primary btn-sm">
            <a class="ojo" href="listadosucursal.php?id=<?php echo $extraer[0] ?>">
              <i class="icon ion-md-eye lead mr-1"></a></i>
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