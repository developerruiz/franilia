<?php 

include 'conexion.php';

$id_producto = $_GET["id"];

$sql = "SELECT * FROM tb_producto WHERE id_producto = '$id_producto' AND estatus = 1";
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();



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



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
  href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,600&display=swap"
  rel="stylesheet">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'> -->
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

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Bienvenido</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">

    <?php require 'complementos/header.php' ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detalles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <!-- <a href="registrar.php" class="btn btn-sm btn-success">Agregar usuario</a>
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
          </div>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button> -->
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Usuarios registrados</h2> -->
      <div class="table-responsive">
        <table class="table table-striped table-sm">

        <?php foreach($resultado as $sql):?>

       
          <tr>
            <td>ID de solicitud</td>
            <td><?php echo $sql['id_producto']; ?></td>
          </tr>

          <tr>
            <td>Nombre:</td>
            <td><?php echo $sql['nombre']; ?></td>
          </tr>
          
          <tr>
              <td>Descripcion:</td>
              <td class="pb-5"><?php echo $sql['descripcion']; ?></td>
            </tr>
            <tr>
              <td>modelo origen:</td>
              <td><?php echo $sql['modelo_o']; ?></td>
            </tr>
          <tr>
            <td>Modelo franilia: </td>
            <td><?php echo $sql['modelo_f']; ?></td>
          </tr>
          <tr>
            <td>Precio</td>
            <td><?php echo $sql['precio']; ?></td>
          </tr>
          <tr>
            <td>Marca</td>
            <td><?php echo $sql['marca']; ?></td>
          </tr>
          <tr>
            <td>observaciones</td>
            <td><?php echo $sql['observaciones']; ?></td>
          </tr>
          <tr>
            <td>Estatus</td>
            <td id="pendiente">
              <?php 
                  if ($sql['aprobada'] = 1) {
                    echo "Publicado";
                  }
                ?>
            </td>
          </tr>
          <tr>
            <td>Imagen</td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($sql['imagen']); ?>" style="width: 350px;" />
            </td>
          </tr>
        </table>
        <div class="d-flex justify-content-between my-2 align-items-center">
          <!-- Button trigger modal -->
          <a href="productos.php" class="ms-2 fs-3">
            <i class="fas fa-arrow-circle-left me-2"></i>Regresar
          </a>

          <div>
            <button type="button" class="btn btn-warning ms-2" data-bs-toggle="modal"
              data-bs-target="#modificarEvento">
              Modificar
            </button>
            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Eliminar
            </button>
          </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="modificarEvento" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Evento: <?php echo $sql['nombre']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="proceso/proceso_editar.php" method="POST">

                  <div class="my-3">
                    <input type="hidden" name="id_producto" class="col-12 form-control"
                      value="<?php echo $sql['id_producto']; ?>">
                  </div>
                  <div class="my-3">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" name="nombre" class="col-12 form-control"
                      value="<?php echo $sql['nombre']; ?>">
                  </div>
                  <div class="my-3">
                    <label for="descripcion_producto">Descripción</label>
                    <textarea name="descripcion_producto" id="" cols="30" rows="10" class="form-control">
                    <?php echo $sql['descripcion']; ?>

                    </textarea>
                  </div>

                  <div class="my-3">
                    <label for="modelo_origen">Modelo origen</label>
                    <input type="text" name="modelo_origen" class="col-12 form-control"
                      value="<?php echo $sql['modelo_o']; ?>">
                  </div>

                  <div class="my-3">
                    <label for="modelo_franilia">Modelo franilia</label>
                    <input type="text" name="modelo_franilia" class="col-12 form-control"
                      value="<?php echo $sql['modelo_f']; ?>">
                  </div>

                  <div class="my-3">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" class="col-12 form-control"
                      value="<?php echo $sql['precio']; ?>">
                  </div>

                  <div class="my-3">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" class="col-12 form-control"
                      value="<?php echo $sql['marca']; ?>">
                  </div>


                  <div class="my-3">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" name="observaciones" class="col-12 form-control"
                      value="<?php echo $sql['observaciones']; ?>">
                  </div>


                </div>
                

                
                <div class="modal-footer justify-content-between">
                              <div>
                              <p>id_evento <?php echo $sql['id_producto']; ?></p>
                              </div>
                  <div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                  </div>



                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Evento: <?php echo $productos['nombre']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Realmente quiere eleiminar el evento: <?php echo $productos['nombre']; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="proceso/eliminar_producto.php?id=<?php echo $productos['id_producto'];?>" class="btn btn-danger">Aceptar</a>
              </div>
            </div>
          </div>
        </div>


        
        <?php endforeach ?>

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