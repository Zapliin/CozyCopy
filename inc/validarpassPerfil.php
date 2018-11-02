<?php

session_start();

require('DAO.php');

if(isset($_POST)){
  $pass = md5($_POST['pass']);
  $id=$_SESSION['ID_usuario'];

  $consulta= "select *FROM usuarios where ID_usuario = $id";
  $result = consultaSelect($consulta);
  if($fila = mysqli_fetch_array($result)){
    if ($pass == $fila['Pass']) {
    header('location: Perfil');
    }else{
      echo '<script language="javascript"> var respuesta=confirm("Eror al validar la contraseña, velva a intentar");
	          if(respuesta==true){
		        window.location.href="validacionPerfil";
	          } else{
		        window.location.href="validacionPerfil";
	            }
	            </script>';
      }
    }
 }
?>
