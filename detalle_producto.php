<?php 
 include 'conexion.php';
 
$id_producto = $_GET["id"];
$sql="SELECT * FROM tb_producto WHERE id_producto = '$id_producto'";
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:: Comercializadora || Franilia ::..</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP´ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ICONS FONTAWENSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

   <?php include 'complementos/header_web.php'?>
    <main>

        <section>

        <?php foreach($resultado as $producto):?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-wrap">
                        <div class="col-lg-6 p-3 ">
                            <div class="card-img">
                                <img src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 p-3">

                            <div class="col-lg-12">
                                <h3><?php echo $producto['nombre']?></h3>
                                <br>
                                <p class="" style="color: #ffffff;"><?php echo $producto['descripcion']?></p>
                                <br>
                                <span style="color: #ffffff;">Codigo: <?php echo $producto['modelo_f']?></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </section>

    </main>

    <footer>
        <div class="col-lg-12-text-center">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <img src="img/logo_franilia.png" alt="" class="logo-footer">
                        </a>
                        <span class="text-color">© 2021 COMERCIALIZADORA FRANILIA </span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">

                        <li><a href=""><i class="text-color fs-2 mx-3 fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="text-color fs-2 mx-3 fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="text-color fs-2 mx-3 fab fa-whatsapp"></i></a></li>

                    </ul>
                </footer>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>