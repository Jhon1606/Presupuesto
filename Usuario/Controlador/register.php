<?php 
require_once('../Modelo/usuario.php');

if($_POST){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    $modelo = new usuarios;
    $modelo->addUser($nombre,$apellido,$usuario,$password);

}


?>
