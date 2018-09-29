<?php

require('DAO.php');


    if(isset($_POST))
    {

        $nmateria = $_POST['nmateria'];
        

        $consulta = "insert into materias (Nombre) values('$nmateria')";
        $resultado = consultaInsert($consulta);

        echo "La materia fue cargada correctamente";
        header('location:CrearMateriaAdmin.php');
    }

?>