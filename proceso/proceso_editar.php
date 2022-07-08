<?php 


$conexion = mysqli_connect("localhost","root","","db_franilia");
 mysqli_set_charset($conexion, "utf8");
 
 $id_producto = $_GET["id"];

  $nombre                                  = $_POST["nombre"];
  $descripcion_producto                    = $_POST["descripcion_producto"]; 
  $modelo_origen                           = $_POST["modelo_origen"];
  $modelo_franilia                         = $_POST["modelo_franilia"];
  $precio                                  = $_POST["precio"];
  $marca                                   = $_POST["marca"];
  $observaciones                           = $_POST["observaciones"];

$actualizar = "UPDATE tb_producto SET nombre = '$nombre', descripcion = '$descripcion_producto', modelo_o = '$modelo_origen', modelo_f = '$modelo_franilia',precio = '$precio' ,marca = '$marca', observaciones = '$observaciones'";

$resultado = mysqli_query($conexion, $actualizar);
  if ($resultado) {
    header('Location:../productos.php');

  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }

?>