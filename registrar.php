<?php 
include("Base_datos.php");
if(isset($_POST["botoningresar"])){
    $nJuego=$_POST["nombre"];
    $plataforma=$_POST["plataforma"];
    $desarrollador=$_POST["desarrollador"];
    $restriccion=$_POST["restriccion"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $img=$_POST["img"];

    $operacionBD=new BaseDatos();
    $operacionBD->conectarBD();
    
    $consultaSQL="INSERT INTO productos(nJuego, plataforma, desarrollador, restriccion, precio, descripcion, img) VALUES ('$nJuego', '$plataforma', '$desarrollador', '$restriccion', '$precio', '$descripcion', '$img')";
    
    
    $operacionBD->agregarDatos($consultaSQL);

}


?>