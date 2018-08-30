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
     <table class="mt-2 mb-2 text-white" border="2" width="98%" align="center" cellpadding="3">
         <tr>
             <td>ID_curso</td>
             <td>Año</td>
             <td>División</td>
             <td>Especialidad</td>
         </tr>

        <?php $consulta = "SELECT *FROM cursos";
      $result = consultaSelect($consulta);
      while($fila = mysqli_fetch_array($result)){
         echo "<tr><td> $fila[ID_curso]</td>";
         echo "<td>$fila[Ano]</td>"; /* Cambiar este campo en la base de datos a "Año" da error, dejarlo en "Ano" */
         echo "<td>$fila[Division]</td>";
         echo "<td>$fila[Especialidad]</td></tr>";
        }
      ?>

    </table>
    </div>
</body>
</html>