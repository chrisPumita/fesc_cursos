<?php
if (isset($_POST['id'])||isset($_POST['cargo'])||isset($_POST['permiso'])){
    $id = $_POST['id'];
    $cargo = $_POST['cargo'];
    $permisosA = $_POST['permiso'];
    include_once "admin_control.php";
    echo actualizaDatosAdmin($id,$cargo,$permisosA);

}