<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('../inc/head.php'); ?>

</head>
<body>

<!-- Barra principal o "Navbar" -->
<?php include('../inc/navbar.php'); ?>
<div class="menadmin">
  <ul><a class="text-white" href="Usuarios_bd.php">Usuarios</a>
    <li>Profesores</a></li>
    <li>Alumnos</li>
  </ul>
  <ul><a class="text-white" href="materias_bd.php">Materias</a></ul>
  <ul><a class="text-white" href="archivos_bd.php">Archivos</a>
  </ul>
  <ul><a class="text-white" href="Cursos_bd.php">Cursos</a>
    <li>Año</li>
    <li>Curso</li>
    <li>Division</li>
  </ul>
</div>

<div class="contenido">

<form class="form-horizontal" method="post" action="pcurso">
    <h2>Crear curso</h2>    
    <div class="form-group">
     <label>Año</label>
	     <input type="text" name="anio" class="form-control" required="">
    </div>          

    <div class="form-group">
    <label>División</label>
    <input  type="text" name="div" class="form-control" required="">
    </div> 

    <div class="form-group">
    <label>Especialidad</label>
    <input type="text" name="esp" class="form-control" required="">
    </div>

     <div class="form-group">
        <button type="submit" class="btn btn-success">Crear</button>
     </div>
    </form>  

    <form class="form-horizontal" method="post" action="procadmin">
    <h2>Agregar materia</h2>    
    <div class="form-group">
     <label>Nombre</label>
	     <input type="text" name="nmateria" class="form-control" required="">
    </div>          

     <div class="form-group">
        <button type="submit" class="btn btn-success">Agregar</button>
     </div>
    </form>  

</div>
