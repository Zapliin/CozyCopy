<?php  

require('DAO.php');

//el !isset es si no esta seteado valida que se haya ejecutado el metodo post desde el form
//basicamente hace una validacion el || significa o 
if(!isset($_POST['email']) || $_POST['email']==''|| $_POST['pass']=='')exit;


$user=$_POST['email'];
$pass=md5($_POST['pass']);
$consulta="select *from usuarios where email= '$user'  AND pass= '$pass'";
//echo $consulta;

$respuesta=consultaSelect($consulta);

if($respuesta!=null)
{
$respuesta=mysqli_fetch_assoc($respuesta);//convierte en array
//var_dump($respuesta);


	session_start();
	$_SESSION['ID_usuario']= $respuesta['ID_usuario'];
	$_SESSION['Email']= $respuesta['Email'];
	$_SESSION['Nombre']= $respuesta['Nombre'];
	$_SESSION['rango']= $respuesta['Rango'];
}
//echo $respuesta["Nombre"] ;

if($respuesta['Rango'] == 3){
	header('location:../vistas/alumnos.php');
}
if($respuesta['Rango']  == 2){
	header('location:../vistas/profesores.php');
}
if($respuesta['Rango']  != 2 || $respuesta['Rango']  != 3){
	echo '<script language="javascript"> var respuesta=confirm("Error al Iniciar Sesion. Intente nuevamente");
	if(respuesta==true){
		window.location.href="../vistas/login.php";
	} else{
		window.location.href="../vistas/login.php";
	}
	 </script>';
	
}

?>