<?php

    include ('conexion.php');
   
    function consultaInsert($consulta){
         try{
             $conexion = crearConexion();
             $sentencia = $conexion->prepare($consulta);
          
            if($sentencia->execute()){
             
                $conexion->close();
                $sentencia->close();
                return true;
            }
            
            else{
                $conexion->close();
                $sentencia->close();
                return "Error en la insercion.";
            }
            
        }catch(Exception $e){
            echo $e;
            $conexion->close();
            $sentencia->close();
            return false;
        }
    }

    function consultaSelect($consulta)
    {
          $conexion = crearConexion();   
    	  $result = mysqli_query($conexion, $consulta);
          return $result;
    }
?>