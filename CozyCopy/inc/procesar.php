<?php

require('DAO.php');


    if(isset($_POST))
    {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $repass = $_POST['repass'];

        $consulta = "insert into usuarios (Nombre, Apellido, Email, Pass) values('$nombre' ,'$apellido','$email','$pass')";
        $resultado = consultaInsert($consulta);

        echo "El registro fue exitoso";
        header('location:../vistas/login.php');
    }
?>
