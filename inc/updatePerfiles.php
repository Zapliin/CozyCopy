<?php

session_start();

require('DAO.php');


    if(isset($_POST))
    {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $id = $_SESSION['ID_usuario'];

        $consulta = "update usuarios set Nombre='$nombre', Apellido='$apellido', Email='$email', Pass='$pass' where ID_usuario=$id";
        $resultado = consultaSelect($consulta);
        echo '<script language="javascript"> var respuesta=confirm("Se modifico correctamente");
if(respuesta==true){
window.location.href="Perfil.php";
} else{
window.location.href="Perfil.php";
}
</script>';
    }
?>
