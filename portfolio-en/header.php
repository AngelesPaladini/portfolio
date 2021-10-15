<header>
  <nav class="navbar navbar-expand-sm mb-4">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "Inicio" ? "active" : ""; ?>" href="./index.php">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "sobre-mi" ? "active" : ""; ?>" href="./about-me.php">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "proyectos" ? "active" : ""; ?>" href="./proyects.php">Proyects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5 <?php echo $header == "contacto" ? "active" : ""; ?>" href="./contact.php">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 border rounded shadow border-dark">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Es</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-radius" href="./index.php">En</a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</header>