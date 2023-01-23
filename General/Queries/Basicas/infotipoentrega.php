<?php
require_once("../../../Basicas/TipoEntrega/Modelo/tipoentrega.php");

$id = $_POST["id"];
$arreglo = array();

$modeloTipoEntrega = new tipoentrega();
$informacionTipoEntrega = $modeloTipoEntrega->getById($id);

if ($informacionTipoEntrega != null){

    foreach ($informacionTipoEntrega as $infoTipoEntrega) {
       
        $arreglo[] = array(
                            "descripcion"=>$infoTipoEntrega["descripcion"],         
                        );
    }
}

echo json_encode($arreglo);

?>