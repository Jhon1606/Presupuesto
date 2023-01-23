<?php
require_once("../../../Basicas/Unidades/Modelo/unidades.php");

$id = $_POST["id"];
$arreglo = array();

$modeloUnidades = new unidades();
$informacionUnidades = $modeloUnidades->getById($id);

if ($informacionUnidades != null){

    foreach ($informacionUnidades as $infoUnidad) {
       
        $arreglo[] = array(
                            "nombre_unidad"=>$infoUnidad["nombre_unidad"],         
                        );
    }
}

echo json_encode($arreglo);

?>