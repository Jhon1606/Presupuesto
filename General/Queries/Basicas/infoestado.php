<?php
require_once("../../../Basicas/Estado/Modelo/estado.php");

$id = $_POST["id"];
$arreglo = array();

$modeloEstado = new estado();
$informacionDepartamento = $modeloEstado->getById($id);

if ($informacionDepartamento != null){

    foreach ($informacionDepartamento as $infoDepartamento) {
       
        $arreglo[] = array(
                            "descripcion"=>$infoDepartamento["descripcion"],         
                        );
    }
}

echo json_encode($arreglo);

?>