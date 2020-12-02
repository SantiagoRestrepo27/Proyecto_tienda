<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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

<main>
<br>
<hr>
<div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-6">
    <h2 class="text-center">Formulario Productos</h2>
    <form class="mt-5" method="POST" action="registrar.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnombre4">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputplataforma4">Plataforma</label>
      <br>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="plataforma" id="exampleRadios1" value="Xbox" checked>
  <label class="form-check-label" for="exampleRadios1">Xbox</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="plataforma" id="exampleRadios2" value="Playstation">
  <label class="form-check-label" for="exampleRadios2">Playstation</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="plataforma" id="exampleRadios3" value="Nintendo">
  <label class="form-check-label" for="exampleRadios3">Nintendo</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="plataforma" id="exampleRadios4" value="Pc">
  <label class="form-check-label" for="exampleRadios4">Pc</label>
</div>

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDesarrollador">Desarrollador</label>
      <input type="text" class="form-control" name="desarrollador">
    </div>
    <div class="form-group col-md-6">
      <label for="inputRestriccion">Restriccion edad</label>
      <input type="text" class="form-control" name="restriccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrecio">Precio</label>
    <input type="text" class="form-control" name="precio">
  </div>
  <div class="form-group">
    <label for="inputDescripcion">Descripcion</label>
    <textarea class="form-control" name="descripcion" rows="3"></textarea>
  </div>
  <div>
    <label for="inputDescripcion">Imagen url</label>
    <input class="form-control" name="img" rows="3"></input>
  </div>
  <br>
      <div>
        <button type="submit" class="btn btn-primary btn-block" name="botoningresar">Ingresar</button>
      </div>
  </div>
        </form>
    </div>
</div>
<br>
<br>
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