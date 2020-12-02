<?php

include("Base_datos.php");

if(isset($_POST["botonEdit"])){

    $id=$_GET["id"];

    $nJuego=$_POST["nombreEdit"];
    $plataforma=$_POST["plataformaEdit"];
    $desarrollador=$_POST["desarrolladorEdit"];
    $restriccion=$_POST["restriccionEdit"];
    $precio=$_POST["precioEdit"];
    $descripcion=$_POST["descripcionEdit"];
    $img=$_POST["imgEdit"];

    $operacionBD= new BaseDatos();

    $consultaSQL= "UPDATE productos SET nJuego='$nJuego',plataforma='$plataforma',desarrollador='$desarrollador',restriccion='$restriccion',precio='$precio',descripcion='$descripcion',img='$img' WHERE id='$id'";

    $operacionBD->actualizarDatos($consultaSQL);

    header("location:bodega.php");
}


?>