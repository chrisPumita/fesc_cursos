<?php
# RCGS
$filtro=$_POST['tipo'];
$estatus=$_POST['estatus'];

include_once "../control/profesores_control.php";
$filtro2=$_POST['estatus'];
echo listaProfesores($filtro2);