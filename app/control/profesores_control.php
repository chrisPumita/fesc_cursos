<?php

function consultaListaProfesores()
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $result = $obj_prof -> getListaProfesores();
    $json_data = json_encode($result);
    return $json_data;
}

function consultaListaProfesoresActivos()
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    $result = $obj_prof -> getListaProfesoresActivos();
    $json_data = json_encode($result);
    return $json_data;
}

function actualizaestatusProfesor($id_profesor, $estatus)
{
    include_once "../model/PROFESOR.php";
    $obj_prof = new PROFESOR();
    return $obj_prof -> updateEstatusProf($id_profesor, $estatus=="1"?"0":"1");

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
/*
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
*/
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

function crearCuentaProfesor($nombre,$app,$apm,$telefono,$sexo,$id_depto,
                             $no_trabajador,$prefijo,$email){
    include_once "../model/PROFESOR.php";

    // creamos objeto
    $obj_prof = new PROFESOR();
    $fecha_registro =date("YmdHis");
    $clave=date("YmdHis");
    // Datos Persona
    $obj_prof->setIdPersona($clave);
    $obj_prof->setNombre($nombre);
    $obj_prof->setApp($app);
    $obj_prof->setApm($apm);
    $obj_prof->setTelefono($telefono);
    $obj_prof->setSexo($sexo);
    $obj_prof->setEstatus("1");
    //Datos profesor
    $obj_prof->setIdDeptoFk($id_depto);
    $obj_prof->setNoTrabajador($no_trabajador);
    $obj_prof->setPrefijo($prefijo);
    $obj_prof->setEmail($email);
    $obj_prof->setPw(md5("0000"));
    $obj_prof->setKeyHash("00000000000");
    $obj_prof->setFirmaDigital("00000000000");
    $obj_prof->setFirmaDigitalImg("0000000000000");
    // hasta ser validado
    $obj_prof->setEstatusProfesor("1");
    $result= $obj_prof->registraPersona();

    if($result){
        $result_profesor=$obj_prof->agregaProfesor();
        return $result_profesor;
    }else{
        return false;
    }
}
