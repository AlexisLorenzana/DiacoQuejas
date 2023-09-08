<?php 
  session_start();

  if(empty($_SESSION['nombre'])){
      header('location: ./');
    }else{
      $correo = $_SESSION['nombre'];
      
      
 ?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Plotly-->
    <script src="librerias/plotly-2.4.2.min.js"></script>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!--datatables-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

    <title>Administrador DIACO</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">DIACO</h4>
            </div>
            <div class="menu">
                <a href="admin.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Tablero</a>

                <a href="listadoquejas.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    <b>Listado De Quejas</b></a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Listado Comercios</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                    Perfil</a>
                <a href="#" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline position-relative d-inline-block my-2">
                            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn position-absolute btn-search" type="submit"><i
                                    class="icon ion-md-search"></i></button>
                        </form>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<img  class="img-fluid rounded-circle avatar mr-2"
                      alt="https://generated.photos/" />-->
                                    Alexis
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Mi perfil</a>
                                    <a class="dropdown-item" href="#">Suscripciones</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->


            <div id="content" class="bg-grey w-100">
                <div class="card-body">
                    <span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarnuevo">
                        Agregar Comercio <span class="fa fa-plus-circle"></span>
                    </span>

                    

                </div>


                <div id="tablaDatatable"></div>


            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
            <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>-->
            <!--<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
            datasets: [{
              label: 'Nuevos usuarios',
              data: [50, 100, 150, 200],
              backgroundColor: [
                '#12C9E5',
                '#12C9E5',
                '#12C9E5',
                '#111B54'
              ],
              maxBarThickness: 30,
              maxBarLength: 2
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>-->

      <!-- Modal Crear Comercio y 1er Sucursal-->
<div class="modal fade" id="agregarnuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Comercio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form id="nuevoComercio" name="nuevoComercio">
            <label for="nit">Nit del Comercio</label>
            <input type="text" class="form-control" id="nit" name="nit" placeholder="12345678-9">
            <label for="razonSocial">Razón Social</label>
            <input type="text" name="razonSocial" id="razonSocial" placeholder="El Exitó" class="form-control">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Zona 1">
            <h5>Sucursal</h5>
            <label for="nombreSucursal">Nombre Sucursal</label>
            <input type="text" name="nombreSucursal" id="nombreSucursal" class="form-control">
            <label for="departamentos">Departamento</label>
            <select class="form-control" id="departamentos" name="departamentos" >
                <option value="0" selected="">Seleccione departamento</option>
                <option value="1">Alta Verapaz</option>
                <option value="2">Baja Verapaz</option>
                <option value="3">Chimaltenango</option>
                <option value="4">Chiquimula</option>
                <option value="5">El Progreso</option>
                <option value="6">Escuintla</option>
                <option value="7">Guatemala</option>
                <option value="8">Huehuetenango</option>
                <option value="9">Izabal</option>
                <option value="10">Jalapa</option>
                <option value="11">Jutiapa</option>
                <option value="12">Petén</option>
                <option value="13">Quetzaltenango</option>
                <option value="14">Quiché</option>
                <option value="15">Retalhuleu</option>
                <option value="16">Sacatepequez</option>
                <option value="17">San Marcos</option>
                <option value="18">Santa Rosa</option>
                <option value="19">Sololá</option>
                <option value="20">Suchitepéquez</option>
                <option value="21">Totonicapán</option>
                <option value="22">Zacapa</option>
            </select>
            <label for="municipios">Municipio</label>
            <select id="municipios" name="municipios" class="form-control">
                <option value="0">Selecciona un municipio</option>
            </select>
            <label for="direccionSucursal">Dirección</label>
            <input type="text" name="direccionSucursal" id="direccionSucursal" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="insertar" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="crearSucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Sucursal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nuevaSucursal" name="nuevaSucursal">
        <label for="nombreSucursal">Nombre Sucursal</label>
            <input type="text" name="nombreSucursal" id="nombreSucursal" class="form-control">
            <label for="departamento">Departamento</label>
            <select class="form-control" id="departamento" name="departamento" >
                <option value="0" selected="">Seleccione departamento</option>
                <option value="1">Alta Verapaz</option>
                <option value="2">Baja Verapaz</option>
                <option value="3">Chimaltenango</option>
                <option value="4">Chiquimula</option>
                <option value="5">El Progreso</option>
                <option value="6">Escuintla</option>
                <option value="7">Guatemala</option>
                <option value="8">Huehuetenango</option>
                <option value="9">Izabal</option>
                <option value="10">Jalapa</option>
                <option value="11">Jutiapa</option>
                <option value="12">Petén</option>
                <option value="13">Quetzaltenango</option>
                <option value="14">Quiché</option>
                <option value="15">Retalhuleu</option>
                <option value="16">Sacatepequez</option>
                <option value="17">San Marcos</option>
                <option value="18">Santa Rosa</option>
                <option value="19">Sololá</option>
                <option value="20">Suchitepéquez</option>
                <option value="21">Totonicapán</option>
                <option value="22">Zacapa</option>
            </select>
            <label for="municipio">Municipio</label>
            <select id="municipio" name="municipio" class="form-control">
                <option value="0">Selecciona un municipio</option>
            </select>
            <label for="direccionSucursal">Dirección</label>
            <input type="text" name="direccionSucursal" id="direccionSucursal" class="form-control">
            <input type="text" name="id_comercio" id="id_comercio" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="insertarSucursal" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>


<?php } ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tablaDatatable').load('tablacomercios.php');
    });
</script>


<!--cargar id a formulario-->
<script type="text/javascript">
    function id_comercio(id_comercio) {
        document.getElementById('id_comercio').value = id_comercio;
    }
</script>


<script>
    $(document).ready(function () {

        var municipio = $('#municipios');

        $('#departamentos').change(function () {
            var departamentos = $(this).val();

            $.ajax({
                data: {
                    departamentos: departamentos
                },
                dataType: 'html',
                type: 'POST',
                url: 'selects.php',

            }).done(function (data) {
                municipio.html(data);
            });

        });

    });
</script>


<script>
    $(document).ready(function () {

        var municipio = $('#municipio');

        $('#departamento').change(function () {
            var departamento = $(this).val();

            $.ajax({
                data: {
                    departamento: departamento
                },
                dataType: 'html',
                type: 'POST',
                url: 'selects.php',

            }).done(function (data) {
                municipio.html(data);
            });

        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //funcion deshabilitada por que no valida campos
        $('#insertar').click(function () {
            datos = $('#nuevoComercio').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/agregar.php",
                success: function (r) {
                    if (r == 1) {
                        //$('#frmnuevo')[0].reset();
                        //$('#tablaDatatable').load('tabla.php');
                        alert("agregado con exito :D");
                        location.reload();
                    } else {
                        alertify.error("Fallo al agregar :(");
                    }
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //funcion deshabilitada por que no valida campos
        $('#insertarSucursal').click(function () {
            datos = $('#nuevaSucursal').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/agregarsucursal.php",
                success: function (r) {
                    if (r == 1) {
                        //$('#frmnuevo')[0].reset();
                        //$('#tablaDatatable').load('tabla.php');
                        alert("agregado con exito :D");
                        location.reload();
                    } else {
                        alert("Fallo al agregar :(");
                    }
                }
            });
        });
    });
</script>

