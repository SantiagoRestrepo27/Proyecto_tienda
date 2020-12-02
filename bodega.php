<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega cosmos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php"><img src="multimedia/gifcosmos.gif" class="cosmosnav" width="50px" height="50px" border-radius="25px" alt="LogoTienda">

  </svg>   Cosmos store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Pagina principal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="formulario.php">Registrar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="bodega.php">Bodega</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cosmos</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<main>
<?php 
include("Base_datos.php");
$operacionBD=new BaseDatos();
$consultaSQL='SELECT * FROM productos WHERE 1';
$productos=$operacionBD->consultarDatos($consultaSQL);
?>
<hr><hr><hr>
<div class="container">
   <div class="row justify-content-center mt-8">
       <div class="col-11">
                <br>
            <h3 class="text-left mb-3">Productos en bodega</h3>
        </div>
    </div>
</div>
<br>
<div  class="xbox">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <br>
         </div>
     </div>
</div>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>
        <?php if($producto["plataforma"]=="Xbox"):?>
          <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["img"])?>" class="img-fluid" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo($producto["nJuego"])?></h5>
                        <h5 class="card-title">plataforma: <?php echo($producto["plataforma"])?></h5>
                        <h5 class="card-title">Desarrollador: <?php echo($producto["desarrollador"])?></h5>
                        <h5 class="card-title">Restriccion de edad: <?php echo($producto["restriccion"])?></h5>
                        <h5 class="card-title">Precio: $<?php echo($producto["precio"])?></h5>
                        <h5 class="card-title">Descripcion: <br> <?php echo($producto["descripcion"])?></h5>
                        <a href="eliminar.php?id=<?php echo($producto["id"]) ?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["id"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($producto["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                                <div class="modal-body">
                                    <form action="editar.php?id=<?php echo($producto["id"]) ?>" method="POST">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombreEdit" class="form-control" value="<?php echo($producto["nJuego"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Plataforma:</label>
                                            <input type="text" name="plataformaEdit" class="form-control" value="<?php echo($producto["plataforma"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Desarrollador:</label>
                                            <input type="text" name="desarrolladorEdit" class="form-control" value="<?php echo($producto["desarrollador"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Restriccion de edad:</label>
                                            <input type="text" name="restriccionEdit" class="form-control" value="<?php echo($producto["restriccion"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" name="precioEdit" class="form-control" value="<?php echo($producto["precio"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea name="descripcionEdit" class="form-control" rows="3"><?php echo($producto["descripcion"])?></textarea>  
                                        </div>

                                        <div class="form-group">
                                            <label>Imagen:</label>
                                            <textarea name="imgEdit" class="form-control" rows="3"><?php echo($producto["img"])?></textarea>  
                                        </div>

                                        <button type="submit" name="botonEdit" class="btn btn-primary">Enviar</button>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>

<div  class="play">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <br>
         </div>
     </div>
</div>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>
        <?php if($producto["plataforma"]=="Playstation"):?>
          <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["img"])?>" class="img-fluid" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo($producto["nJuego"])?></h5>
                        <h5 class="card-title">plataforma: <?php echo($producto["plataforma"])?></h5>
                        <h5 class="card-title">Desarrollador: <?php echo($producto["desarrollador"])?></h5>
                        <h5 class="card-title">Restriccion de edad: <?php echo($producto["restriccion"])?></h5>
                        <h5 class="card-title">Precio: $<?php echo($producto["precio"])?></h5>
                        <h5 class="card-title">Descripcion: <br> <?php echo($producto["descripcion"])?></h5>
                        <a href="eliminar.php?id=<?php echo($producto["id"]) ?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["id"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($producto["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                                <div class="modal-body">
                                    <form action="editar.php?id=<?php echo($producto["id"]) ?>" method="POST">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombreEdit" class="form-control" value="<?php echo($producto["nJuego"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Plataforma:</label>
                                            <input type="text" name="plataformaEdit" class="form-control" value="<?php echo($producto["plataforma"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Desarrollador:</label>
                                            <input type="text" name="desarrolladorEdit" class="form-control" value="<?php echo($producto["desarrollador"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Restriccion de edad:</label>
                                            <input type="text" name="restriccionEdit" class="form-control" value="<?php echo($producto["restriccion"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" name="precioEdit" class="form-control" value="<?php echo($producto["precio"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea name="descripcionEdit" class="form-control" rows="3"><?php echo($producto["descripcion"])?></textarea>  
                                        </div>

                                        <div class="form-group">
                                            <label>Imagen:</label>
                                            <textarea name="imgEdit" class="form-control" rows="3"><?php echo($producto["img"])?></textarea>  
                                        </div>

                                        <button type="submit" name="botonEdit" class="btn btn-primary">Enviar</button>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>

<div  class="nintendo">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <br>
         </div>
     </div>
</div>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>
        <?php if($producto["plataforma"]=="Nintendo"):?>
          <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["img"])?>" class="img-fluid" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo($producto["nJuego"])?></h5>
                        <h5 class="card-title">plataforma: <?php echo($producto["plataforma"])?></h5>
                        <h5 class="card-title">Desarrollador: <?php echo($producto["desarrollador"])?></h5>
                        <h5 class="card-title">Restriccion de edad: <?php echo($producto["restriccion"])?></h5>
                        <h5 class="card-title">Precio: $<?php echo($producto["precio"])?></h5>
                        <h5 class="card-title">Descripcion: <br> <?php echo($producto["descripcion"])?></h5>
                        <a href="eliminar.php?id=<?php echo($producto["id"]) ?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["id"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($producto["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                                <div class="modal-body">
                                    <form action="editar.php?id=<?php echo($producto["id"]) ?>" method="POST">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombreEdit" class="form-control" value="<?php echo($producto["nJuego"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Plataforma:</label>
                                            <input type="text" name="plataformaEdit" class="form-control" value="<?php echo($producto["plataforma"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Desarrollador:</label>
                                            <input type="text" name="desarrolladorEdit" class="form-control" value="<?php echo($producto["desarrollador"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Restriccion de edad:</label>
                                            <input type="text" name="restriccionEdit" class="form-control" value="<?php echo($producto["restriccion"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" name="precioEdit" class="form-control" value="<?php echo($producto["precio"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea name="descripcionEdit" class="form-control" rows="3"><?php echo($producto["descripcion"])?></textarea>  
                                        </div>

                                        <div class="form-group">
                                            <label>Imagen:</label>
                                            <textarea name="imgEdit" class="form-control" rows="3"><?php echo($producto["img"])?></textarea>  
                                        </div>

                                        <button type="submit" name="botonEdit" class="btn btn-primary">Enviar</button>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>

<div  class="pc">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <br>
         </div>
     </div>
</div>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>
        <?php if($producto["plataforma"]=="Pc"):?>
          <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["img"])?>" class="img-fluid" alt="imagen"> 
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo($producto["nJuego"])?></h5>
                        <h5 class="card-title">plataforma: <?php echo($producto["plataforma"])?></h5>
                        <h5 class="card-title">Desarrollador: <?php echo($producto["desarrollador"])?></h5>
                        <h5 class="card-title">Restriccion de edad: <?php echo($producto["restriccion"])?></h5>
                        <h5 class="card-title">Precio: $<?php echo($producto["precio"])?></h5>
                        <h5 class="card-title">Descripcion: <br> <?php echo($producto["descripcion"])?></h5>
                        <a href="eliminar.php?id=<?php echo($producto["id"]) ?>" class="btn btn-danger">Eliminar</a>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["id"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($producto["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                           </div>
                                <div class="modal-body">
                                    <form action="editar.php?id=<?php echo($producto["id"]) ?>" method="POST">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" name="nombreEdit" class="form-control" value="<?php echo($producto["nJuego"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Plataforma:</label>
                                            <input type="text" name="plataformaEdit" class="form-control" value="<?php echo($producto["plataforma"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Desarrollador:</label>
                                            <input type="text" name="desarrolladorEdit" class="form-control" value="<?php echo($producto["desarrollador"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Restriccion de edad:</label>
                                            <input type="text" name="restriccionEdit" class="form-control" value="<?php echo($producto["restriccion"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" name="precioEdit" class="form-control" value="<?php echo($producto["precio"])?>">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea name="descripcionEdit" class="form-control" rows="3"><?php echo($producto["descripcion"])?></textarea>  
                                        </div>

                                        <div class="form-group">
                                            <label>Imagen:</label>
                                            <textarea name="imgEdit" class="form-control" rows="3"><?php echo($producto["img"])?></textarea>  
                                        </div>

                                        <button type="submit" name="botonEdit" class="btn btn-primary">Enviar</button>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>
</main>

<footer class="footer">
      <br>
      <hr>
      <hr color="silver">
      <div class="justify-content-center"><font size=4 color="silver"><img src="multimedia/LogoCorreoFooter.png" alt="LogoLlamada" width="25" height="25"> Perfiles Github: SantiagoRestrepo27 - pabloholguin08 <br> derechos reservados <img src="multimedia/LogoDerAutoFooter.png" alt="LogoLlamada" width="25" height="25"></font> </div>
        <br>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>