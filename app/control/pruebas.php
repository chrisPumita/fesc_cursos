<?php
include_once "../model/ESTADO_REP.php";

$edo = new ESTADO_REP();
$resultado = $edo->consultaEstados();
var_dump($resultado);