<html lang="es">
 <head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('../inc/head.php'); ?>

  </head>
  <body>

    <?php 
      require('DAO.php');
      include('navbar.php');
      include('izqadministrador.php') ?>

     <div class="contenido">
        <br>
        <h3 align="center">Modificar un Usuario</h3> <br>

        <div class="row ml-3">
       <div class="col-xs-9 col-md-3">

          <form class="form-horizontal" role="form" method="POST" action="updateUsuarios.php">

            <div class="form-group">
            <label>Escriba el ID del usuario a modificar</label>
            <input  type="int" name="id" class="form-control" required="" placeholder="Escriba el ID">
            </div>

            
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
              <label>Contraseña</label>
              <input  type="password" name="pass" class="form-control" required="" placeholder="Escriba una contraseña">
            </div>

            <div class="form-group">
              <label>Tipo</label>
              <select name="rango" class="form-control" required="">
                <option value="2">Profesor</option>
                <option value="3">Alumno</option>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
            
          </form>
        </div>
      </div>
   </div> 
</body>
</html>