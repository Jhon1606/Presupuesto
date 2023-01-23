<?php
require_once("../../../Basicas/Proceso/Modelo/proceso.php");

$id = $_POST["id"];
$arreglo = array();

$modeloProceso = new proceso();
$informacionProceso = $modeloProceso->getById($id);

if ($informacionProceso != null){

    foreach ($informacionProceso as $infoProceso) {
       
        $arreglo[] = array(
                            "nombre_proceso"=>$infoProceso["nombre_proceso"],         
                        );
    }
}

echo json_encode($arreglo);

?>