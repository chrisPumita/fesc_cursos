<?php
include_once "../model/CONEXION_M.php";
//include_once "../../login.php";

$conn = new  CONEXION_M();
$estado_seleccionado = 1;
$query = "SELECT `id_municipio`, `id_estado_fk`, `clave`, `municipio` FROM `municipios`
WHERE `id_estado_fk` = 1 ORDER BY `municipio` ASC";
/*$query = "SELECT `id_municipio`, `id_estado_fk`, `clave`, `municipio` FROM `municipios`
 ORDER BY `municipio` ASC";*/


$conn->connect();
$result = $conn->getData($query);
$conn->close();

$json_data = json_encode($result);
echo $json_data;
?>
