<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('../inc/head.php'); ?>

</head>
<body>

<?php  require('DAO.php');
       include('navbar.php');
       include('izqadministrador.php') ?>

<div class="contenido">
  <table border="1" width="97%" align="center" cellpadding="3">
    <tr>
      <td>Id_Usuario</td>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Email</td>
      <td>Pass</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <?php $consultaID = "SELECT ID_usuario FROM usuarios";
      $resultado = consultaSelect($consultaID);
      echo $resultado; ?>
    </tr>
  </table>
</div>

</body>
</html>
