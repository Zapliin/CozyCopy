<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="../inc/redirectNavbar.php"> <img src="../img/logo.png" width="269" height="71" alt="CozyCopy"></a>
      <div>
      <div class="d-inline-block mr-3 text-white">
      <?php echo $_SESSION["Nombre"]; ?>
      </div>
      <div class="d-inline-block">
      <a class="btn btn-primary inline-block" href="../inc/CerrarSesion.php" role="button">Cerrar Sesión</a>
      </div>
      </div>
    </nav>
