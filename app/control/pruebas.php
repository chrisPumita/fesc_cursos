<?php
include_once "../model/GRUPO.php";

$grupo = new GRUPO();
$resultado = $grupo->consultaGrupos(1);
var_dump($resultado);