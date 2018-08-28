<?php


require_once('../clases/Usuario.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$objpersona = new Usuario($nombre,$apellido,$email,$pass);



//echo $objpersona->GetNombre().' '.$objpersona->GetApellido();




?>