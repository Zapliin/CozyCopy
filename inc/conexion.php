<?php

    function crearConexion(){
        
        $servidor   = "localhost";
        $nombreBD   = "cc";
        $usuario    = "root";
        $contrasena = "";
      
        $conexion = new mysqli($servidor,$usuario,$contrasena,$nombreBD);
        
        if($conexion->connect_error){
            die("Error en la conexion : ".$conexion->connect_errno.
                                      "-".$conexion->connect_error);
        }
      
        return $conexion;
    }

?>