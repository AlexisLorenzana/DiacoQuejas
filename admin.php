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
        <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
          Tablero</a>

        <a href="listadoquejas.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
          Listado De Quejas</a>

        <a href="listadocomercios.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
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

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline position-relative d-inline-block my-2">
              <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
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
                  <a class="dropdown-item" href="procesos/logout.php">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->

      <!-- Page Content -->








      <!--
      

-->

      <div id="content" class="bg-grey w-100">

        <div class="formulario">
          <form id="frmConsulta" name="frmConsulta">
            <div class="mb-3">
              <label for="nit">Nit Comercio</label>
              <input type="text" name="nit" id="nit" class="form-control" placeholder="12345678-9">
            </div>
            <label for="depart"></label>
            <select id="departamentos" name="departamentos" class="form-control form-select-lg mb-3">
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
            <button type="submit" id="cargar" name="cargar" class="btn btn-primary">Buscar</button>
          </form>
        </div>

        <div id="content" class="bg-grey">

          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel panel-primary">
                  <div class="panel panel-heading">
                    Graficas
                  </div>
                  <div class="panel panel-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div id="cargaLineal"></div>
                      </div>
                      <div class="col-sm-6">
                        <div id="cargaBarras"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <section class="">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel panel-primary">
                  <div class="panel panel-heading">
                    Graficas
                  </div>
                  <div class="panel panel-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div id="cargaMunicipios"></div>
                      </div>
                      <div class="col-sm-6">
                        <div id="cargaRegiones"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
</div> 
<!--
        

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart" width="300" height="150"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Ventas recientes</h6>
                  </div>
                  <div class="card-body pt-2">
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2 mb-3">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <button class="btn btn-primary w-100">Ver todas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
-->
      </div>



      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
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
</body>

</html>

<?php } ?>


<!--Carga de grafica con fecha por marca, día, mes o año-->
<script type="text/javascript">
  $(document).ready(function () {
    //funcion deshabilitada por que no valida campos
    $('#cargar').click(function () {
      var datos = $('#frmConsulta').serialize();

      $.ajax({
        type: "POST",
        url: "barras.php",
        data: datos,
        success: function (r) {
          if (r != 1) {

            //recargarLista();
            $('#cargaBarras').html(r);

          } else {
            alertify.error("Fallo la consulta:(");

          }
        }
      });
      return false;
    });


  });
</script>

<!--Carga de grafica con fecha por marca, día, mes o año-->
<script type="text/javascript">
  $(document).ready(function () {
    //funcion deshabilitada por que no valida campos
    $('#cargar').click(function () {
      var datos = $('#frmConsulta').serialize();

      $.ajax({
        type: "POST",
        url: "municipios.php",
        data: datos,
        success: function (r) {
          if (r != 1) {

            //recargarLista();
            $('#cargaMunicipios').html(r);

          } else {
            alertify.error("Fallo la consulta:(");

          }
        }
      });
      return false;
    });


  });
</script>

<!--Carga de grafica con fecha por marca, día, mes o año-->
<script type="text/javascript">
  $(document).ready(function () {
    //funcion deshabilitada por que no valida campos
    $('#cargar').click(function () {
      var datos = $('#frmConsulta').serialize();

      $.ajax({
        type: "POST",
        url: "regiones.php",
        data: datos,
        success: function (r) {
          if (r != 1) {

            //recargarLista();
            $('#cargaRegiones').html(r);

          } else {
            alertify.error("Fallo la consulta:(");

          }
        }
      });
      return false;
    });


  });
</script>


<script type="text/javascript">
  $(document).ready(function () {
    $('#cargaLineal').load('lineal.php');
    $('#cargaBarras').load('barras.php');
    $('#cargaMunicipios').load('municipios.php');
    $('#cargaRegiones').load('regiones.php');
  });
</script>