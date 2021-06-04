<?php
// {id,status,type},
if (isset($_POST['id'])||isset($_POST['status'])||isset($_POST['type'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    $type = $_POST['type'];
    $mje = "";
    switch ($type)
    {
        //definir a quien le voy a cambiar el estatus
        case 1:
            include_once "alumno_control.php";
            $mje = updateEstatus($id,$status) ? "Se actualizo el estatus": "Error al actualizar el estatus";
        break;
        case 2:
            //actualizo a profesor
            include_once "profesores_control.php";
            $mje=actualizaestatusProfesor($id, $status) ? "Se actualizó el estatus" : "error al actualizar el estatus";
        break;
        case 3:
        //actualizo a admin
            include_once "admin_control.php";
            $mje = cambiaEstatusAdmin($id,$status) ? "Se actulizó el estatus" : "Error al actulizar el estatus";
        break;
    }
    echo $mje;
}