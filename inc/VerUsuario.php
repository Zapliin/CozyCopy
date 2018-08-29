<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('../inc/head.php'); ?>

   </head>
   <body>

   <?php 
      require('DAO.php');
      include('navbar.php');
      include('izqadministrador.php') ?>

     <div class="contenido">
     <table class="mt-2 mb-2" border="1" width="98%" align="center" cellpadding="3">
     <tr>
      <td>Id_Usuario</td>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Email</td>
      <td>Rango</td>
     </tr>
     
      <?php $consulta = "SELECT *FROM usuarios";
      $result = consultaSelect($consulta);
      while($fila = mysqli_fetch_array($result)){
         echo "<tr><td> $fila[ID_usuario]</td>";
         echo "<td>$fila[Nombre]</td>";
         echo "<td>$fila[Apellido]</td>";
         echo "<td>$fila[Email]</td>";
         echo "<td>$fila[Rango]</td></tr>";
        }
      ?>
      
   </table>
    </div>

 </body>
</html>
