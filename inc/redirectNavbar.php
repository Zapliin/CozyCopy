<?php 

session_start();

if($_SESSION['rango']==3){
    header('location: ../vistas/alumnos');
}

if($_SESSION['rango']==2){
    header('location: ../vistas/profesores');
}

echo $_SESSION['rango'];

?>