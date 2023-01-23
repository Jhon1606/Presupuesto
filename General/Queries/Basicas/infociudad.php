<?php
require_once("../../../Basicas/Ciudad/Modelo/ciudad.php");

$id = $_POST["id"];
$arreglo = array();

$modeloCiudad = new ciudad();
$informacionCiudad = $modeloCiudad->getById($id);

if ($informacionCiudad != null){

    foreach ($informacionCiudad as $infoCiudad) {
       
        $arreglo[] = array(
                            "id_departamento"=>$infoCiudad["id_departamento"],     
                            "nombre_ciudad"=>$infoCiudad["nombre_ciudad"]     
                        );
    }
}

echo json_encode($arreglo);

?>