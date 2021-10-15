<?php
  $header="Inicio";
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="Inicio">
  <?php
  include_once("header.php");
  ?>
  <main class="container">
    <div class="row">
      <div class="col-12 mt-4 my-5 text-center div-cohete">
        <a href="proyectos.php"><img src="imagenes/cohete.svg" class="cohete"></a>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 mt-sm-5 text-center offset-sm-3">
        <div class="input-home">
          <p class="p-1">Bienvenid@ a mi portfolio</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center my-5 mt-0">
        <a href="proyectos.php" class="btn shadow">click aqui para ver mis proyectos :)</a>
      </div>
    </div>
  </main>
  <footer class="footer mt-5 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3">
          <a href="https://github.com/AngelesPaladini" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/angeles-paladini-3bb8761ab/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        
        <div class="col-12 col-sm-3">
          Sponsor <a href="http://depcsuite.com">DEPC Suite</a>
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
</body>

</html>
</body>