<?php

function consultaListaProfesores()
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $result = $obj_prof -> getListaProfesores();
    $json_data = json_encode($result);
    return $json_data;
}

function actualizaProfesor($id_profesor, $estatus)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    echo $obj_prof -> updateEstatusProf($id_profesor, $estatus) ? "Se modifico profesor" : "no pudimos modificar al profesor";

}

function consultarProfesor($id_profesor)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $result = $obj_prof -> consultaProfesor($id_profesor);
    $json_data = json_encode($result);
    return $json_data;
}

function eliminarProfesor($id_profesor)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    echo $obj_prof -> eliminaProfesor($id_profesor) ? "Se elimino profesor" : "no pudimos eliminar al profesor";

}
function modificarPwProf($id_profesor,$pw)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    echo $obj_prof -> modifcaPw($id_profesor,md5($pw)) ? "Se modifico la contraseña" : "no pudimos modificar la contraseña";

}
function agregarProfesor($id_persona,$depto,$no_trab,$prefijo,$emal,$pw,$hash,$firma,$ruta)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $obj_prof->setIdPersona($id_persona);
    $obj_prof->setIdDeptoFk($depto);
    $obj_prof->setNoTrabajador($no_trab);
    $obj_prof->setPrefijo($prefijo);
    $obj_prof->setEmail($emal);
    $obj_prof->setPw(md5($pw));
    $obj_prof->setKeyHash($hash);
    $obj_prof->setFechaRegistro(date("d-m-Y"));
    $obj_prof->setFirmaDigital($firma);
    $obj_prof->setFirmaDigitalImg($ruta);
    echo $obj_prof -> agregaProfesor() ? "Se registro un profesor" : "no pudimos registrar al profesor";

}
function modificarProfesor($id_prof,$id_persona,$depto,$no_trab,$prefijo,$emal,$hash,$firma,$ruta)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $obj_prof->setIdProfesor($id_prof);
    $obj_prof->setIdPersona($id_persona);
    $obj_prof->setIdDeptoFk($depto);
    $obj_prof->setNoTrabajador($no_trab);
    $obj_prof->setPrefijo($prefijo);
    $obj_prof->setEmail($emal);;
    $obj_prof->setKeyHash($hash);
    $obj_prof->setFirmaDigital($firma);
    $obj_prof->setFirmaDigitalImg($ruta);
    echo $obj_prof -> modificaProfesor() ? "Se modifico un profesor" : "no pudimos modificar al profesor";

}

