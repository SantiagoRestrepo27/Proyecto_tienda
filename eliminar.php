<?php 

$id=$_GET["id"];

include("Base_datos.php");

$operacionBD= new BaseDatos();

$consultaSQL= "DELETE FROM productos WHERE id='$id'";

$operacionBD->eliminarDatos($consultaSQL);

header("location:bodega.php");

?>