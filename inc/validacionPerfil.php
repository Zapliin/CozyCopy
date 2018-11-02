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
include ('DAO.php');
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
    <div class="modifperfil">
        <form class="form-horizontal" method="post" action="validarpassPerfil.php"><br>
            <div class="form-group">
                <label>Ingrese su contraseña para acceder a las modificaciones del perfil</label>
                <input  type="password" name="pass" class="form-control" required="" placeholder="Escriba una contraseña">
            </div>
        
            <div class="form-group">
                <button type="submit" class="btn btn-success">Valdiar</button>
            </div>
        </form>
    </div>
</body>
</html>
