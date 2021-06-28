<?php
if(isset($_POST['id_profesor'])) {
    include_once "admin_control.php";
    $id_admin = $_POST['id_profesor'];
    echo consultaAdministrador($id_admin);
}else {
    include_once "admin_control.php";
    echo consultaAdministradores();
}