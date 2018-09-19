<?php

require('DAO.php');


    if(isset($_POST))
    {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rango = $_POST['rango'];
        $pass = md5($_POST['pass']);
        $repass = $_POST['repass'];

        $consulta = "insert into usuarios (Nombre, Apellido, Email, Rango, Pass) values('$nombre','$apellido','$email','$rango',$pass')";
        $resultado = consultaInsert($consulta);

        echo "El registro fue exitoso";
        header('location:../vistas/login.php');
    }
?>
