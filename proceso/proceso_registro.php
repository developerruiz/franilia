<?php 
include '../conexion.php';
  
  $nombre                                  = $_POST["arbol"];
  $descripcion_producto                    = $_POST["descripcion_producto"];
  $modelo_origen                           = $_POST["modelo_origen"];
  $modelo_franilia                         = $_POST["modelo_franilia"];
  $precio                                  = $_POST["precio"];
  $marca                                   = $_POST["marca"];
  $observaciones                           = $_POST["observaciones"];
  $fecha_actual                           = $_POST["fecha_actual"];
  $imagen                       = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
  $insertar = "INSERT INTO tb_producto(nombre, descripcion, modelo_o, modelo_f,precio ,marca, observaciones, imagen, fecha_creado, estatus) VALUES
  ('$nombre','$descripcion_producto','$modelo_origen','$modelo_franilia','$precio','$marca','$observaciones','$imagen','$fecha_actual','1')";

  $resultado = $pdo->query($insertar);

  if ($resultado) {
    echo "<script>alert('Producto registrado con éxito'); window.location='/franilia/reg_producto.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  