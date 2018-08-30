<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('../inc/head.php'); ?>

</head>
<body>

<?php include('../inc/navbar.php'); ?>
<?php include('../inc/izqadministrador.php') ?>

<div class="contenido">
  <form class="form-horizontal ml-3 mt-2" method="post" action="pcurso">
  <h2>Crear curso</h2>
  <div class="form-group">
   <label>Año</label>
   <div class="col-3">
     <input type="text" name="anio" class="form-control" required="">
   </div>
  </div>

  <div class="form-group">
  <label>División</label>
  <div class="col-3">
  <input  type="text" name="div" class="form-control" required="">
</div>
  </div>

  <div class="form-group">
  <label>Especialidad</label>
  <div class="col-3">
  <input type="text" name="esp" class="form-control" required="">
</div>
  </div>

   <div class="form-group">
      <button type="submit" class="btn btn-success">Crear</button>
   </div>
  </form>
</div>

</body>
</html>
