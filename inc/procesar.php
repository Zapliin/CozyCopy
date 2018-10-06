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
        $curso= $_POST[''];

        if($_POST['pass'] == $_POST['repass']){
            $consulta = "insert into usuarios (Nombre, Apellido, Email, Rango, Pass) values('$nombre','$apellido','$email','$rango','$pass')";
            $resultado = consultaInsert($consulta);
            }

            if($_POST['rango']==2 || $_POST['rango']==3){
                header('location:../vistas/login.php');
                }
        }else{
            echo '<script language="javascript"> var respuesta=confirm("Error al Registrarte. Compruebe los datos ingresados e intente nuevamente");
	if(respuesta==true){
		window.location.href="../vistas/registro.php";
	} else{
		window.location.href="../vistas/registro.php";
	}
	 </script>';
        }
?>
