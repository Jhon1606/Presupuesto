<?php

require_once("../../Helpers/alert.php");
require_once("../../conexion.php");
session_start();


class usuarios extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }

    public function login($usuario,$password){

    $rows=null;
    $statement=$this->conexion->prepare("SELECT * FROM usuarios WHERE user_id = :usuario AND clave = :contrasena");
    $statement->bindParam(':usuario',$usuario);
    $statement->bindParam(':contrasena',$password);
    $statement->execute();
    if ($statement->rowCount()==1){
        $result=$statement->fetch();
        $_SESSION['Nombre'] = $result["user_nombre"];
        $_SESSION['Id'] = $result["empleado"];
        $_SESSION['Perfil'] = $result["perfil"];
        $_SESSION['Usuario'] = $result["user_id"];
        return true;
    }
        // create_flash_message("Error", "Los datos son incorrectos","error");
        return false;
    }

    public function addUser($nombre,$apellido,$user,$password){
     
        $statement=$this->conexion->prepare("INSERT INTO usuario(nombre,apellido,user,contrasena)
                                            VALUES(:nombre,:apellido,:user,:contrasena)");
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':apellido',$apellido);
        $statement->bindParam(':user',$user);
        $statement->bindParam(':contrasena',$password);
        if($statement->execute()){
            create_flash_message("Exitoso", "Registro exitoso","success");
            header('Location: ../../index.php');
        }else{
            create_flash_message("Error", "Error al registrar","error");
            header('Location: ../../register.php');
        }

    }

    public function salir(){
        // $_SESSION['Id'] = null;
        // $_SESSION['Nombre'] = null;
        // $_SESSION['Perfil'] = null;
        session_start();
        session_destroy();
        header('Location: ../../index.php');
    }
        
    }




?>