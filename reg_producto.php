<?php 
  include 'conexion.php';
  $productos="SELECT * FROM tb_producto";
  
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard Template · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" href="css/sidebars.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">

      <?php require 'complementos/header.php' ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <h2 class="fs-4 fw-bold my-1 p-3">Registrar producto</h2>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <form action="proceso/proceso_registro.php" method="POST" onsubmit="return validar();" class="formulario-card"
              enctype="multipart/form-data">
              <div class="form-row formulario-card shadow-sm p-3 bg-white rounded">

                <?php 
                        date_default_timezone_set("America/Mexico_City");
                        $fecha_actual =date("Y-m-d H:i:s");
                  ?>


                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="nombre">Nombre del producto</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="descripcion_producto">Descripcion del producto</label>
                  <br>
                  <textarea name="descripcion_producto" id="descripcion_producto" rows=5" placeholder="Descripción del producto"
                    class="form-control"></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="modelo_origen">Modelo de origen</label>
                  <input type="text" class="form-control" name="modelo_origen" id="modelo_origen" placeholder="Modelo de origen">
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="modelo_franilia">Modelo franilia</label>
                  <input type="text" class="form-control" name="modelo_franilia" id="modelo_franilia" placeholder="Modelo franilia">
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="precio">Precio</label>
                  <input type="text" class="form-control" name="precio" id="precio" placeholder="00.00">
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="marca">Marca</label>
                  <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="observaciones">Observaciones</label>
                  <br>
                  <textarea name="observaciones" id="observaciones" rows=5" placeholder="Observaciones"
                    class="form-control"></textarea>
                </div>

                <div class="gorm-group col-lg-12 d-none">
                  <label for="fecha_actual">Fecha de solicitud</label>
                  <input type="datetime" name="fecha_actual" id="fecha_actual" class="col-12 form-control"
                    value="<?= $fecha_actual?>" readonly>

                  </label>
                </div>

                <div class="form-group col-md-12">
                  <label class="fw-bold my-2" for="">Imagen</label>
                  <br>
                  <input type="file" name="imagen" id="imagen">
                </div>

                <div class="form-group col-lg-12 btn-reg-usr my-3">
                  <input type="submit" value="Registrar producto" class="btn-success btn-lg " id="btn-registrar">

                </div>
              </div>
            </form>

          </table>
        </div>
      </main>
    </div>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>
  <script src="js/dashboard.js"></script>
  <script src="js/main.js"></script>
  <script src="js/script.js"></script>
  <script src="js/sidebars.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>