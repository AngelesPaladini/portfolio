<?php
$header = "proyectos";
?>
<!DOCTYPE html>
<HTml lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
  <?php
  include_once("header.php");
  ?>
  <main class="container">
    <div class="row">
      <div class="col-12 py-5">
        <h1>Proyectos</h1>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p>A continuacion se encuentran algunos de los trabajos que he realizado:</p>
        </div>
      </div>
      <div class="row" class="cajaproyectos">
        <div class="col-12 col-sm-4 border p-sm-0 bloques" class="singleProject">
          <div class="row col-12 p-0">
            <img src="../Portfolio/imagenes/abmclientes.png" alt="ABM clientes" class="img-fluid">
          </div>
          <div class="col-12 gradiente ml-auto py-2">
            <h2>ABM CLIENTES</h2>
          </div>
          <div class="col-12pt-2">
            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          </div>
          <div class="flexbox">
            <div class="col-6 my-5">
              <a href="http://" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 my-5">
              <a href="http://github.com" class="link-rojo">Codigo fuente</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 border p-sm-0 bloques" class="singleProject">
          <div class="row mx-auto bg-white">
            <img src="../Portfolio/imagenes/abmventas.png" alt="ABM clientes" class="img-fluid">
          </div>
          <div class="col-12 gradiente ml-auto py-2">
            <h2>SISTEMAS GESTION DE VENTAS</h2>
          </div>
          <div class="col-12pt-2">
            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          </div>
          <div class="flexbox">
            <div class="col-6 my-5">
              <a href="http://" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 my-5">
              <a href="http://github.com" class="link-rojo">Codigo fuente</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 border p-sm-0 bloques" class="singleProject">
          <div class="row mx-auto bg-white">
            <img src="../Portfolio/imagenes/proyecto-integrador.png" alt="ABM clientes" class="img-fluid">
          </div>
          <div class="col-12 gradiente ml-auto py-2">
            <h2>PROYECTO INTEGRADOR</h2>
          </div>
          <div class="col-12pt-2">
            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          </div>
          <div class="flexbox">
            <div class="col-6 my-5">
              <a href="http://" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 my-5">
              <a href="http://github.com" class="link-rojo">Codigo fuente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer mt-auto py-3 pb-5 text-center text-sm-left">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3">
          <a href="https://github.com/AngelesPaladini" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/angeles-paladini-3bb8761ab/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3">
          Sponsor <a href="http://depcsuite.com">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3">
          <a href="mailto:paladiniangeles@gmail.com">paladiniangeles@gmail.com</a>
        </div>
      </div>
    </div>
  </footer>
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=541155609406" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
  </div>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>