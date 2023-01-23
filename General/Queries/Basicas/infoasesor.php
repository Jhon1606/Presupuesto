<?php
require_once("../../../Basicas/Asesor/Modelo/asesor.php");

$id = $_POST["id"];
$arreglo = array();

$modeloAsesor = new asesor();
$informacionAsesor = $modeloAsesor->getById($id);

if ($informacionAsesor != null){

    foreach ($informacionAsesor as $infoAsesor) {
       
        $arreglo[] = array(
                            "nombre"=>$infoAsesor["nombre"],     
                            "correo"=>$infoAsesor["correo"],     
                            "telefono"=>$infoAsesor["telefono"],       
                        );
    }
}

echo json_encode($arreglo);

?>