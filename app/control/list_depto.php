<?php
include_once "../model/DEPTO.php";
$obj_depto = new DEPTO();
$result = $obj_depto->listaDepartamentos();
$json_data = json_encode($result);
echo $json_data;
?>