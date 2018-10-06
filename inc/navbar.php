<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php"> <img src="../img/logo.png" width="269" height="71" alt="CozyCopy"></a>
      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Opcion 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Opción 2</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>-->
      <div>
      <div class="d-inline-block mr-3 text-white">
      <?php echo $_SESSION["Nombre"]; ?>
      </div>
      <div class="d-inline-block">
        <a class="btn btn-primary inline-block" href="../inc/validacionPerfil.php" role="button">Perfil</a>
      </div>
      <div class="d-inline-block">
      <a class="btn btn-primary inline-block" href="../inc/CerrarSesion.php" role="button">Cerrar Sesión</a>
      </div>
      </div>
    </nav>
