<?php 

class BaseDatos {

    public $usuarioBD="root";
    public $passwordBD="";

    public function __construct(){}

    public function conectarBD(){

        try{

            $datosBD="mysql:host=localhost;dbname=cosmos";
            $conexion= new PDO($datosBD, $this->usuarioBD, $this->passwordBD);
            return ($conexion);

        }catch(PDOException $error ){

            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $insercionRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$insercionRegistro->execute();

        if($resultado){

            echo("exito agregando el registro");

        }else{

            echo("error agregando el registro");
        }

        header("location:formulario.php");

    }

    public function consultarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $buscarRegistros=$conexionBD->prepare($consultaSQL);

        $buscarRegistros->setFetchMode(PDO::FETCH_ASSOC);

        $resultado=$buscarRegistros->execute();

        if($resultado){
           return($buscarRegistros->fetchAll());
        }else{
            echo("error");
        }

    }

    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();

        $eliminarRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$eliminarRegistro->execute();

        if($resultado){

            echo("exito eliminando el registro");

        }else{

            echo("error eliminando el registro");
        }

    }

    public function actualizarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();


        $editarRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$editarRegistro->execute();

        if($resultado){

            echo("exito editando el registro");

        }else{

            echo("error editando el registro");
        }


    }



}



?>