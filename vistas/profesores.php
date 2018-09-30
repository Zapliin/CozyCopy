<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include('../inc/head.php'); ?>
</head>
<body>

<?php

session_start();

if(!isset($_SESSION['ID_usuario']) || $_SESSION['Email']=='' || $_SESSION['Nombre']==''){
	header('location:login.php');
}

?>

<!-- Barra principal o "Navbar" -->
<?php include('../inc/navbar.php'); ?>

		<!-- lugar reservado para la publicidad en la parte derecha de la pantalla -->
		<div class="publicidad">
			<ul>
  				<li>Publicidad</li>
			</ul>
		</div>
		<!-- Logo y Nombre de la escuela -->
<div class="archivos">
<form enctype="multipart/form-data" action="../inc/uploader.php" method="post">
      <input name="uploadedfile" type="file" />
      <input type="submit" value="Subir archivo" />
</form>
<p class="ml-3"><img src="../img/logo_escuela.jpg" width="50px" height="50px" class="mr-2">Escuela de Educacion Secundaria Tecnica Nº3 Domingo Faustino Sarmiento</p>
<hr>
</div>

		<!-- Lugar donde van a estar los archivos subidos -->
<div class="container w-75 float-left ml-5">
	<div class="row">
		<div class="col bg-dark">
			<br><br><br><br><br>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col bg-dark">
			<br><br><br><br><br>
		</div>
	</div>
</div>

</body>
</html>

