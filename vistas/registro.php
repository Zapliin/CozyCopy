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

<div class=" container container-fluid"> <br> <br>

<!-- Menú de registro -->
<h2> Formulario de registro de usuario</h2>

  <div class="row">
       <div class="col-xs-9 col-md-3">
          <form class="form-horizontal" method="post" action="../inc/procesar.php">

               <div class="form-group">
                   <label>Nombre</label>
                   <input type="text" name="nombre" class="form-control" required="" placeholder="Ingrese su nombre">
               </div>

                <div class="form-group">
                   <label>Apellido</label>
                   <input type="text" name="apellido" class="form-control" required="" placeholder="Ingrese su apellido">
               </div>

               <div class="form-group">
                    <label>Correo electrónico</label>
                    <input  type="email" name="email" class="form-control" required="" placeholder="Ingrese su email">
               </div>

                <div class="form-group">
                   <label>Tipo</label>
                   <select name="rango" class="form-control" required="">
                        <option value="2">Profesor</option>
                        <option value="3">Alumno</option>
                    </select>
               </div>

               <div class="form-group">
                    <label>Contraseña</label>
                    <input  type="password" name="pass" class="form-control" required="" placeholder="Escriba una contraseña">
               </div>

               <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input  type="password" name="repass" class="form-control" required="" placeholder="Repita su contraseña">
               </div>

               <div class="form-group">
                    <button type="submit" class="btn btn-success">Registrarme</button>
                    </div>
           </form>
           <div class="panel-footer">
               ¿Ya tienes una cuenta? <a href="login.php" class="text-white">Inicia sesión</a> <br><br>
           </div>
       </div>
   </div>
</div>

</body>
</html>
