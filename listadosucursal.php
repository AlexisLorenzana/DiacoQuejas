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

        <!--Datatables-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

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

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
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
                <?php
    //session_start();
    echo $datos;
    require_once "clases/conexion.php";
    $obj = new conectar();
    $conexion=$obj->conexion();

    $id = $_GET["id"];
      $result = mysqli_query($conexion,"SELECT * from sucursal where id_comercio = '$id'");
   
    $extraer = mysqli_fetch_row($result);

    ?>



                <div class="table-responsive">
                    <table id="iddatatable" class="table table-hover table-condensed table-striped active"
                        style="text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col-xl-2">No.</th>
                                <th scope="col-xl-2">Nit</th>
                                <th scope="col">Dirección</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php for($i=0;$i<$extraer;$i++) { ?>
                            <tr>
                                <td><?php echo$extraer[0];?></td>
                                <td><?php echo$extraer[1];?></td>
                                <td><?php echo$extraer[4];?></td>
                                


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

       

            </div>

<?php }?>
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



            <script type="text/javascript">
                $(document).ready(function () {
                    $('#tablaDatatable').load('tablasucursales.php');
                });
            </script>

<script type="text/javascript">
        $(document).ready(function() {
        $('#iddatatable').DataTable();
        } );
    </script>

