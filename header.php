<header>
  <nav class="navbar navbar-expand-sm mb-4">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "Inicio" ? "active" : ""; ?>" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "sobre-mi" ? "active" : ""; ?>" href="sobre-mi.php">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "proyectos" ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "contacto" ? "active" : ""; ?>" href="contacto.php">Contacto</a>
          </li>
        </ul>
        <form class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 border rounded shadow border-dark">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Es</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-radius" href="./portfolio-en/index.php">En</a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</header>