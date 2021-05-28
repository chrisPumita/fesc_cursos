<?php
include_once "../model/TIPO_PROCEDENCIA.php";
$obj_pro = new TIPO_PROCEDENCIA();
$result = $obj_pro->consultaTiposProcedencia();
$json_data = json_encode($result);
echo $json_data;
?>