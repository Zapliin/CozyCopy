<?php  

require('DAO.php');

if(!isset($_POST['email']) || $_POST['email']==''|| $_POST['pass']=='')exit;

$validar="select Rango from usuarios";
$user=$_POST['email'];
$pass=md5($_POST['pass']);
$consulta="select *from usuarios where email='email' AND pass='pass'";
$respuesta=consultaSelect($consulta);
$respuesta=mysqli_fetch_assoc($respuesta);//convierte en array
//var_dump($respuesta);
if($respuesta!=null)
{
	session_start();
	$_SESSION['ID_usuario']=respuesta['ID_usuario'];
	$_SESSION['Email']=respuesta['Email'];
	$_SESSION['Nombre']=respuesta['Nombre'];
}

echo $validar;

if($validar == 3){
	header('location:../vistas/alumnos.php');
}
if($validar == 2){
	header('location:../vistas/profesores.php');
}
if($validar != 2 || $validar != 3){
	echo "Se produjo un error, intente mas tarde";
}

?>