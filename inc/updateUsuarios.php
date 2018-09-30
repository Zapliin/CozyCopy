<?php

require('DAO.php');


    if(isset($_POST))
    {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rango = $_POST['rango'];
        $pass = md5($_POST['pass']);
        $id = $_POST['id'];

        $consulta = "update usuarios set Nombre='$nombre', Apellido='$apellido', Email='$email', Rango=$rango, Pass='$pass' where ID_usuario=$id";
        $resultado = consultaSelect($consulta);
        
        echo "El Update fue exitoso";
        header('location:../vistas/administrador.php');
    }
?>