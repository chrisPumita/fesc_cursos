<?php

/////////////////////////CONSTANCIAS ALUMNO////////////////////////////////////////////////
function listaConstanciasAlumno(){
    include_once "../model/CONSTANCIA_ALUM.php";
    $obj_const= new CONSTANCIA_ALUM();
    $result=$obj_const->consultarlistaConstanciasAl();
    $detalles=json_encode($result);
    return $detalles;
}
function consultarConstanciaAlumno($inscripcion){
    include_once "../model/CONSTANCIA_ALUM.php";
    $obj_const= new CONSTANCIA_ALUM();
    $result=$obj_const->consultarConstanciaAl($inscripcion);
    $detalles=json_encode($result);
    return $detalles;
}

function  crearConstanciaAlumno(){
    include_once "../model/CONSTANCIA_ALUM.php";
    $obj_const= new CONSTANCIA_ALUM();
    $obj_const->getIdProfesorAdminFirmaFk();
    $obj_const->getIdInscripcionActaFk();
    $obj_const->getSelloDigital();
    $obj_const->getVerificada();
    $obj_const->getFechaCreacion();
    $obj_const->getEstatus();
    $obj_const->getQrVerificador();
    $result=$obj_const->crearConstanciaAl();
    return $result;
}
function  modificarConstanciaAlumno(){
    include_once "../model/CONSTANCIA_ALUM.php";
    $obj_const= new CONSTANCIA_ALUM();
    $obj_const->getIdConstanciaAlumno();
    $obj_const->getIdProfesorAdminFirmaFk();
    $obj_const->getIdInscripcionActaFk();
    $obj_const->getSelloDigital();
    $obj_const->getVerificada();
    $obj_const->getFechaCreacion();
    $obj_const->getEstatus();
    $obj_const->getQrVerificador();
    $result=$obj_const->modificarConstanciaAl();
    return $result;
}
function  eliminarConstanciaAlumno(){
    include_once "../model/CONSTANCIA_ALUM.php";
    $obj_const= new CONSTANCIA_ALUM();
    $obj_const->getIdConstanciaAlumno();
    $obj_const->getEstatus();
    $result=$obj_const-> eliminarConstanciaAl();
    return $result;
}

///////////////////////////CONSTANCIAS PROFESOR/////////////////////////////////////////////

