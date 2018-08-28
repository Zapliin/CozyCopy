<?php

class Usuario{

private $nombre;
private $apellido;
private $email;
private $pass;



function __construct($nombre, $apellido,$email,$pass){

$this->nombre = $nombre;
$this->apellido = $apellido;
$this->email = $email;
$this->pass = $pass;


}

public function SetNombre($nombre){
    $this->nombre = $nombre;
}

public function SetApellido($apellido){
    $this->apellido = $apellido;
}

public function SetEmail($email){
    $this->email = $email;
}

public function SetPass($pass){
    $this->pass = $pass;
}

public function GetNombre(){
     return $this->nombre;
    }

public function GetApellido(){
    return $this->apellido;
}

public function GetEmail(){
    return $this->email;
}

public function GetPass(){
    return $this->pass;
}

?>