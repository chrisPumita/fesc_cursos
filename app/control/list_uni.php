<?php
include_once "../model/CONEXION_M.php";

$conn = new CONEXION_M();
$query = "SELECT `id_universidad`, `nombre`, `siglas` FROM `universidades` 
WHERE `id_universidad`> 0 ORDER BY `universidades`.`nombre` ASC";

$conn->connect();
$result = $conn->getData($query);
$conn->close();

//conviertiendo el array en json
$json_data = json_encode($result);
//regreso el array
echo $json_data;
?>