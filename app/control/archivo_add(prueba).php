<?php


if (isset($_FILES['archivo'])) {
    include_once "./documentos_control.php";

    //declaro mis variables que enviare a la funcion

    $nombreArchivo = $_FILES['archivo']['name'];
    $Archivo = $_FILES['archivo']['tmp_name'];
    // envio a documentos control el archivo
    $id_inscripcion=123456;
    $result=subirarchivo($nombreArchivo,$Archivo,$id_inscripcion);
    echo $result;
    /*
    if (subirarchivo($nombreArchivo,$Archivo,$id_inscripcion)) {
        echo "Archivo subido .";
    } else {
        echo "Ocurrio un error";
    }*/
} else {
    echo "error al enviar el archivo";
}