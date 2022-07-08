<?php

    include 'conexion.php';

    $sql = "SELECT * FROM tb_producto WHERE estatus = 1 order by id_producto ASC";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $articulo_x_pagina = 8;

    $total_artituclos_db = $sentencia -> rowCount();

    echo $total_artituclos_db;
    $paginas = $total_artituclos_db/8;
    $paginas=  ceil($paginas);
    //echo $paginas;

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
        <!-- <section id="portada">
        </section> -->
        <section id="catálogo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center my-5">
                        <h1>Catálogo</h1>
                    </div>
                    <?php 
                    
                    if(!$_GET){
                        header('Location:index.php?pagina=1');
                    }
                    if($_GET['pagina']>$paginas || $_GET['pagina']<= 0){
                        header('Location:index.php?pagina=1');
                    }

                    $iniciar = ($_GET['pagina']-1)*$articulo_x_pagina;
                    //echo $iniciar;

                    $sql_articulos = 'SELECT * FROM tb_producto LIMIT :iniciar,:narticulos';
                    $sentencia_articulos = $pdo->prepare($sql_articulos);



                    $sentencia_articulos->bindParam(':iniciar',$iniciar, PDO::PARAM_INT);
                    $sentencia_articulos->bindParam(':narticulos', $articulo_x_pagina, PDO::PARAM_INT);


                    $sentencia_articulos -> execute();

                    $resultado_articulos = $sentencia_articulos->fetchAll();

                    ?>

                    <div class="col-lg-12 d-flex flex-wrap my-5 justify-content-around">


                    <?php foreach($resultado_articulos as $producto):?>


                    <div class="card col-lg-3 p-3 text-color">
                        <div class="card-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']); ?>" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                            <p class="card-text"><?php echo  $producto['descripcion']?></p>
                            <a href="detalle_producto.php?id=<?php echo $producto['id_producto'];?>" class="">Ver
                                más</a>
                        </div>
                    </div>


                    <?php endforeach ?>


                </div>
            </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                <li class="page-item
                                <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">


                                    <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                                        Anterior
                                    </a>

                                </li>

                                <?php for ($i=0; $i < $paginas; $i++): ?>

                                <li class="page-item
                                <?php echo  $_GET['pagina'] == $i+1 ? 'active' : '' ?>">
                                    <a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>">
                                        <?php echo $i+1 ?>
                                    </a>
                                </li>

                                <?php endfor?>

                                <li class="page-item

                                <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>

                                  "> <a class="page-link" href="index.php?pagina=<?php echo
                                    $_GET['pagina']+1 ?>">
                                        Siguiente
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

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