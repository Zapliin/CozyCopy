<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include('../inc/head.php'); ?>
</head>
<body>

<!-- Barra principal o "Navbar" -->
<?php include('../inc/navbarblank.php'); ?>

<!-- Menú de "Ingresar" -->
    <div class="container" style="margin-top: 40px;">
   <div class="row">
   <div class="col-md-4 col-md-offset-4">
     <div class="panel panel-default">
        <div class="panel-heading">
        <h2>Ingresar</h2>
        </div>
     <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="../inc/login.php">
       <div class="form-group">
         <label for="email" class="col-sm-3 control-label"> Correo electrónico</label>
       <div class="col-sm-9">
         <input type="email" class="form-control" id="email"  name="email" placeholder="Email" value="" required autofocus />
       </div>
    </div>

      <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Contraseña</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="pass" id="pass"   placeholder="Password" required />
      </div>
     </div>
     <div class="form-group">
       <div class="col-sm-offset-3 col-sm-9">
       <div class="checkbox">
       <label><input type="checkbox"/>Recuérdame</label>
     </div>
   </div>
 </div>

     <div class="form-group last">
       <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success btn-sm"> Entrar</button>
        <button type="reset" class="btn btn-default btn-sm"> Olvide mi contraseña</button>
       </div>
     </div>
 </form>
</div>
    <div class="panel-footer">
         ¿Todavia no estas registrado? <a href="C:\xampp\htdocs\Proyecto_Jueves\vistas\registro.php" class="text-white">Registrarme</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>