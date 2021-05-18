<?php

/* ------------------DOCUMENTOS FUNCIONES----------------------- */
function creaDocumento($nombreDoc, $formato, $tipo, $pesoMax){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    /*`id_documento`,`nombre_doc`,`formato_admitido`,`tipo`,`peso_max_mb`,`estatus`*/
    $obj_doc->setNombreDoc($nombreDoc);
    $obj_doc->setFormatoAdmitido($formato);
    /*.jpg, .jpeg, .png, .pdf*/
    /* 0-> documento  1-> Identificacion 2-> Comprobante Pago -> 3 Contancia */
    $obj_doc->setTipo($tipo);
    $obj_doc->setPesoMaxMb($pesoMax);
    $obj_doc->setEstatusDocumento("1");
    return $obj_doc->crearDocumento() ? "Se guardo datos de documento":"Error al guardar datos de docuento";
}

function editaDocumento(){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    $obj_doc->setIdDocumento("3");
    $obj_doc->setNombreDoc("CREDENCIAL DE ESTUDIANTE");
    $obj_doc->setFormatoAdmitido(".pdf");
    $obj_doc->setTipo("IDENTIFICACION");
    $obj_doc->setPesoMaxMb("5");
    $obj_doc->setEstatusDocumento("1");

    if ($obj_doc->modificaDocumento()){
        return "Se actualizo documento";
    }
    else
    {
        return "Error al actualizar docuento";
    }
}

function consultaDocumentos(){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    $result = $obj_doc->consultaDocumentos();
    $json_data = json_encode($result);
    return $json_data;
}

function borraDocumento($id_doc,$estado){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    return $obj_doc->borrarDocumento($id_doc,$estado) ? "Se eliminó el documento":"Error al eliminar docuento";
}
/* ------------------DOCUMENTOS FUNCIONES----------------------- */

/* ------------------DOCUMENTOS FUNCIONES----------------------- */