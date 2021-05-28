<?php

include_once "../model/CONEXION_M.php";

$conn = new CONEXION_M();
$query = "SELECT `id_estado`, `clave`, `estado`, `abrev` FROM `estados` ORDER BY `estados`.`estado` ASC";

$conn->connect();
$result = $conn->getData($query);
$conn->close();

$json_data = json_encode($result);

echo $json_data;
?>