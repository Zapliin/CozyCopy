<?php  

require('DAO.php');

if(!isset($_POST['email']) || $_POST['email']==''|| $_POST['pass']=='')exit;


$user=$_POST['email'];
$pass=md5($_POST['pass']);
$consulta="select *from usuarios where email='email' AND pass='pass'";
$respuesta=consultaSelect($consulta);
$respuesta=mysqli_fetch_assoc($respuesta);//convierte en array
//var_dump($respuesta);
if($respuesta!=null)
{
	session_start();
	$_SESSION['id']=respuesta['id'];
	$_SESSION['email']=respuesta['email'];
	$_SESSION['nombre']=respuesta['nombre'];
}
header('location:../vistas/alumnos.php');

?>