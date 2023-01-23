<?php
require_once("../../../Basicas/Departamento/Modelo/departamento.php");

$id = $_POST["id"];
$arreglo = array();

$modeloDepartamento = new departamento();
$informacionDepartamento = $modeloDepartamento->getById($id);

if ($informacionDepartamento != null){

    foreach ($informacionDepartamento as $infoDepartamento) {
       
        $arreglo[] = array(
                            "nombre_departamento"=>$infoDepartamento["nombre_departamento"],         
                        );
    }
}

echo json_encode($arreglo);

?>