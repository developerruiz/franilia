<?php 

include ("../conexion.php");

$id_producto = $_GET["id"];
$eliminar_producto="UPDATE tb_producto SET estatus = 2 WHERE id_producto = '$id_producto'";

$resultado = mysqli_query($conexion, $eliminar_producto);

if ($eliminar_producto) {
    echo "<script>window.location='/franilia/productos.php'</script>";
}else{
	echo"<script>alert('error no se puede usuario');</scrip>";
}
