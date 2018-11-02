<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include('../inc/head.php'); ?>
</head>
<body>

<?php

session_start();

if(!isset($_SESSION['ID_usuario']) || $_SESSION['Email']=='' || $_SESSION['Nombre']==''){
	header('location:login.php');
}
include('../inc/navbarPerfiles.php');
include('DAO.php');
include('../inc/Publicidad.php');
?>

  <div class="row">
      <div class="col-3" style="background-color: #343a40; color:white;">
          <?php
          $id=$_SESSION['ID_usuario'];
          $consulta= "select *FROM usuarios where ID_usuario = $id";
          $result = consultaSelect($consulta);
          if($fila = mysqli_fetch_array($result)){
             echo "
                  <div class='user-center'>
                      <img src='../img/user.png' class='user-image'><br>
                  </div>

                  <div class='container-fluid'>
                      <h1><b>$fila[Apellido]</b> $fila[Nombre]</h1>
                  </div>";}
          ?>
      </div>
      <div class="col-9"></div>
  </div>
<div align="center">
  <h1>Modificar Perfil</h1> <br>
  </div>
  <div class="modifperfil">
  <form class="form-horizontal" method="post" action="updatePerfiles.php">
    <div class="form-group">
        <label>Nuevo Nombre</label>
        <input type="text" name="nombre" class="form-control" required="" placeholder="Ingrese su nuevo nombre">
    </div>

     <div class="form-group">
        <label>Nuevo Apellido</label>
        <input type="text" name="apellido" class="form-control" required="" placeholder="Ingrese su nuevo apellido">
    </div>

    <div class="form-group">
         <label>Nuevo Correo electrónico</label>
         <input  type="email" name="email" class="form-control" required="" placeholder="Ingrese su nuevo email">
    </div>
    <div class="form-group">
         <label>Nueva Contraseña</label>
         <input  type="password" name="pass" class="form-control" required="" placeholder="Escriba una contraseña">
           </div>
         <div class="form-group">
              <button type="submit" class="btn btn-success">Modificar</button>
              </div>
  </form>
</div>
</body>
</html>
