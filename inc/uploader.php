<?php

require('DAO.php');

if(isset($_POST['subir'])){

}

$target_path = "../uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
$ruta= $_FILES['uploadedfile']['tmp_name'];


if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
{ 
    echo "El archivo fue subido correctamente";
    /*$consulta="insert into archivos(Ruta) values('$ruta')";
    $resultado = consultaInsert($consulta);*/
} 

else
{
    echo "Ha ocurrido un error, intente nuevamente";
}


?>