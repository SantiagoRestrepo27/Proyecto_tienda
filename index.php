<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmos</title>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="multimedia/Carousel1.jpg" class="d-block w-100" alt="Carousel1"  width="1000" height="400">
    </div>
    <div class="carousel-item">
    <img src="multimedia/Carousel2.png" class="d-block w-100" alt="Carousel2"  width="1000" height="400">
    </div>
    <div class="carousel-item">
    <img src="multimedia/Carousel3.jpg" class="d-block w-100" alt="Carousel3"  width="1000" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<div class="container">
   <div class="row justify-content-center mt-8">
       <div class="col-11">
                <br>
            <h3 class="text-left mb-3">Productos</h3>
        </div>
    </div>
</div>
            <br>
<div  class="xbox">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <img src="multimedia/bannerxbox.jpg" class="d-block w-100" alt="bannerxbox"  width="1000" height="200">
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
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>
<br>
<div  class="play">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <img src="multimedia/bannerplay.jpg" class="d-block w-100" alt="bannerplay"  width="1000" height="200">
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
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>
<br>
<div  class="nintendo">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <img src="multimedia/bannernintendo.png" class="d-block w-100" alt="bannernintendo"  width="1000" height="200">
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
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>
<br>
<div  class="pc">
     <div class="row justify-content-center mt-12">
         <div class="col-10">
               <br>
               <img src="multimedia/bannerpc.jfif" class="d-block w-100" alt="bannerpc"  width="1000" height="200">
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
                    </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>
    </div>      
</div>
<hr>
<hr>
<br>
<div class="container">
   <div class="row justify-content-center mt-8">
      <div class="col-11">
        <div class="card-deck">
            <div class="card">
               <img src="multimedia/MuestraMedIzq.jpg" class="card-img-top" alt="MuestraIzq"  width="200" height="250">
            <div class="card-body">
       </div>
         </div>
           <div class="card">
              <img src="multimedia/gifcosmos.gif" class="card-img-top" alt="VideoIndex"  width="200" height="250" controls autoplay muted loop>
           <div class="card-body">
         </div>
       </div>
           <div class="card">
              <img src="multimedia/MuestraMedDer.jpg" class="card-img-top" alt="MuestraDer"  width="200" height="250">
           </div>
           </div>
     </div>
</div>
<br>
<hr>
<br>
<br>
<div  class="fta">
    <div class="row justify-content-center mt-8">
         <div class="col-5">
               <br>
                  <p>Envíos
                    <br>
                     Realizamos envíos en Medellin y su área metropolitana, sin costo adicional, por compras superiores a $70.000. Para otras ciudades el costo del envío será asumido por el cliente y el pago del envío será contraentrega según las políticas de la empresa transportadora
                  </p>
                  <p>Comunícate con nosotros 
                     <br>
                     WhatsApp. [+57] 312 432 6544 <br>                                                               
                     Correo. cosmosstore@gmail.com
                 </p>
                  <p> Medios de pago
                     <br>
                     Pagos con PSE, Tarjeta Débito y Crédito.
                     Tus pagos están protegidos con nosotros.
                 </p>
             </div>
             <div style="border-left:4px solid #b2b8b2;height:350px;"></div>
             <div class="col-5">
               <br>
                  <p>¿Quienes somos?</p>
                  <p>En Cosmos store somos una empresa originaria de Medellin en la cual nos especializamos principalmente en la venta de videojuegos, nuestros juegos contienen especiales descuentos brindandole una gran cantidad de productos con un gran precio para el consumidor.
                  <br>
                  <br>
                  La empresa ha logrado ubicarse en un lugar muy especial dentro del corazon de la comunidad gamer, al poner a su disposición numerosos productos con un gran valor y fiabilidad que han llegado hacia muchas personas a lo largo del pais. 
                <br> </p>
             </div>
             </div>
             <br>
        </div>
    </div>
</div>

</div>
</main>
<br>
<hr>
<footer class="footer">
      <br>
      <hr>
      <div class="row justify-content-center mt-8">
        <div class="col-5">
        <font size=5 color="silver">Informacion de la tienda</font>
        <hr>
        <p class="footer_index"><img src="multimedia/LogoUbicacionFooter.png" alt="LogoUbicacion" width="25" height="25"> Tienda de videojuegos cosmos. Premium Plaza ,Medellin.</p>
        <p class="footer_index"><img src="multimedia/LogoLlamadaFooter.png" alt="LogoLlamada" width="25" height="25"> Numero de contacto: +57 312 432 6544</p>
        </div>
        <div style="border-left:4px solid  #424242;height:80px;"></div>
        <div class="col-5">
        <font size=5 color="silver">Siguenos en nuestras redes sociales</font>
        <hr>
        <p class="footer_index"><img src="multimedia/LogoFacebookFooter.png" alt="LogoFacebook" width="25" height="25"> Encuentranos en facebook como: Cosmos Games</p>
        <p class="footer_index"><img src="multimedia/LogoInstagramFooter.png" alt="LogoInstagram" width="25" height="25">  Encuentranos en Instagram como: @CosmosGames</p>
        </div>
      </div>
      <hr color="silver">
      <div class="justify-content-center"><font size=4 color="silver"><img src="multimedia/LogoCorreoFooter.png" alt="LogoLlamada" width="25" height="25"> Perfiles Github: SantiagoRestrepo27 - pabloholguin08 <br> derechos reservados <img src="multimedia/LogoDerAutoFooter.png" alt="LogoLlamada" width="25" height="25"></font> </div>
        <br>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>