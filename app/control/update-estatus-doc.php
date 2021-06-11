<?php
if (isset($_POST['id'])||isset($_POST['estatus_ap'])){
    //recibo por post
    $id = $_POST['id'];
    $status = $_POST['estatus_ap'];

    $mje = "";
        include_once "documentos_control.php";
        $mje = modificaEstatusAr($id,$status) ? "Se actualizó el estatus" : "Error al actulizar el estatus";
    echo $mje;
}