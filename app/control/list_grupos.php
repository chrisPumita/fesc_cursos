<?php
$id=$_POST['idPr'];

include_once "asignacion_grupos_control.php";
echo consultarAsignaciones($id);