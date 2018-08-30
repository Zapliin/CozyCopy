<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cozy Copy</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php include('head.php'); ?>

</head>
<body>

<?php 
    include('navbar.php');
    include('izqadministrador.php');
    include('DAO.php');?>

<div class="contenido">
    <table class="mt-2 mb-2 text-white" border="2" width="98%" align="center" cellpadding="3">
        <tr>
            <td>ID_Materia</td>
            <td>Nombre</td>
        </tr>

        <?php 
        $consulta = "SELECT *FROM materias";
        $result = consultaSelect($consulta);
        while($fila = mysqli_fetch_array($result)){
            echo "<tr><td> $fila[ID_materia]";
            echo "<td> $fila[Nombre]</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>