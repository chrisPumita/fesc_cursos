<?php
if(isset($_POST['id']) && isset($_POST['estatus_ap'])){
    $id=$_POST['id'];
    $estatus_ap=$_POST['estatus_ap'];
    include_once "asignacion_grupos_control.php";
    echo Cambia_estatus_asignacion($id,$estatus_ap);

}