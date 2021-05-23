<?php

//nos va a verificar que exist el prof con clave en cuenta admin
function verificaAdministrador($idProf, $clave, $nivel_permiso){
    // 0 -> todos
    // 1 -> algunos
    // 2-> especifico
    require_once "../model/ADMIN.php";
    $admin_tmp = new ADMIN();
    $result = $admin_tmp-> buscaCuentaAdmin($idProf);
    //si result esta definia, es decir trae datos, entonces es true es decir != NULL
    if (isset($result) && count($result)>0 && count($result)<2){
        // verificar que la pw y los niveles de permiso sean los correctos
        return (md5($clave)==$result[0]["clave_confirmacion"] && $nivel_permiso == $result[0]["permisos"]);
        /*
        echo "<br>";
        echo "PW: ".$result[0]["id_profesor_admin_fk"];
        echo "PW: ".$result[0]["clave_confirmacion"];
        echo "<br>Nivel Acceso ".$result[0]["permisos"];
        echo "<br>Cargo ".$result[0]["cargo"];
        echo "<br>";
        */
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