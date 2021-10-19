<?php
  $header="contacto";
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="contacto">
  <?php include_once("header.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 py-4 mb-4">
        <h1>Contacto</h1>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p>Te invito a que te contactes enviandome un mensaje o bien por Whatsapp</p>
          <div class="codigo-qr">
            <h2 class="mt-5">¡Escanea el código y escribime!</h2>
            <img class="mb-5 mt-4 border" src="imagenes/WhatsApp Image 2021-08-06 at 21.55.21.jpeg" alt="QR">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <form action="" method="post">
            <div>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control mb-3 shadow" require>
            </div>
            <div>
              <input type="email" name="txtCorreo" id="txtCorreo" placeholder="email@xxx.com" class="form-control mb-3 shadow" require>
            </div>
            <div>
              <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="xx-xxxx-xxxx" class="form-control mb-3 shadow" require>
            </div>
            <div>
              <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" placeholder="Escribe aqui tu mensaje" class="form-control mb-3 shadow" require></textarea>
            </div>
            <div>
              <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">Enviar</button>
            </div>
          </form>
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