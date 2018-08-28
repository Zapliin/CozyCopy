<?php

require('DAO.php');


    if(isset($_POST))
    {

        $anio = $_POST['anio'];
        $div = $_POST['div'];
        $esp = $_POST['esp'];

        $consulta = "insert into cursos (Anio, Division, Especialidad) values('$anio' ,'$div','$esp')";
        $resultado = consultaInsert($consulta);

        echo "Curso creado correctamente";
        
    }

?>
