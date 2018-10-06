<?php 

session_start();

if($_SESSION['rango']==3){
    header('location: ../vistas/alumnos.php');
}

if($_SESSION['rango']==2){
    header('location: ../vistas/profesores.php');
}

echo $_SESSION['rango'];

?>