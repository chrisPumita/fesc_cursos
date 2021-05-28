<?php

//nos va a verificar que exist el prof con clave en cuenta admin
function verificaAdministrador($idProf, $clave, $nivel_permiso){
    require_once "../model/ADMIN.php";
    $admin_tmp = new ADMIN();
    $result = $admin_tmp-> buscaCuentaAdmin($idProf);
    //si result esta definia, es decir trae datos, entonces es true es decir != NULL
    if (isset($result) && count($result)>0 && count($result)<2){
        // verificar que la pw y los niveles de permiso sean los correctos
        return (md5($clave)==$result[0]["clave_confirmacion"] && $nivel_permiso == $result[0]["permisos"]);
    }
    else{
        return false;
    }
}

function verificaCuentaProfesor($correo,$pw){

}

function verificaCuentaAlumno($correo,$pw){

}

function verificaSerSoc($id_alumno, $clave_acceso){

}