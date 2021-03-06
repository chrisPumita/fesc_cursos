<?php
include_once "../model/ALUMNO.php";

function consultaListaAlumnos($edoFiltro,$idAlumno)
{
    include_once "../model/ALUMNO.php";
    $objAlumn = new ALUMNO();
    $result = $objAlumn->consultarListaAlumnos($edoFiltro,$idAlumno);
    $json_data = json_encode($result);
    return $json_data;
}



function crearCuentaAlumno($id_municipio, $id_universidad,$matricula,
                           $nombre_uni,$idProcedencia, $carrera_especialidad,
                           $email,$pw,$nombre,$app,$apm,$telefono,$sexo){
    include_once "../model/CLAVES.php";
    //verificar si existe una cuenta

    $al = new ALUMNO();
    $clave = date("YmdHis");
    $al->setIdPersona($clave);
    $al->setNombre($nombre);
    $al->setApp($app);
    $al->setApm($apm);
    $al->setTelefono($telefono);
    $al->setSexo($sexo);
    //default el estado es 1
    $al->setEstatus("1");
    ///Crear alumno
    $al->setIdMunicipio($id_municipio);
    $al->setIdUniversidad($id_universidad);
    $al->setMatricula($matricula);
    $al->setNombreUni($nombre_uni);
    $al->setIdProcedencia($idProcedencia);
    $al->setCarreraEspecialidad($carrera_especialidad);
    $al->setEmail($email);
    $al->setPw(md5($pw));
    // valor por default de la cuenta de alumno = 0
    // porque no se ha validado cuenta de alumno
    $al->setEstatusAlumno("0");

    $result = $al->registraPersona();
    if ($result){
        $res= $al->agregaAlumno();
        return $res;
    }
    else{
        return false;
    }
}

function updateEstatusAlumno($id,$status){
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    return $objAlum->updateEstatusAlumno($id,$status=="1"?"0":"1");
}

function updateAlumno($id_municipio, $id_universidad,$matricula,
                      $nombre_uni,$idProcedencia, $carrera_especialidad,
                      $email,$pw,$nombre,$app,$apm,$telefono,$sexo)
{
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    return $objAlum->modificaAlumno();
}

function consultaAlumno($id_alumno){
    include_once "../model/ALUMNO.php";
    $al = new ALUMNO();
    $result = $al ->consultaAlumno($id_alumno);
    $json_data = json_encode($result);
    return $json_data;
}

function updatePwdAlumn($id_alumn,$pwd)
{
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    echo $objAlum->modifcaPw($id_alumn, md5($pwd))?"Se modifico la contrase??a correctamente":"No se pudo modificar la contrase??a";
}

function eliminarAlumno($id_alumno)
{
    include_once "../model/ALUMNO.php";
    $obj_alumn = new ALUMNO();
    echo $obj_alumn->eliminaAlumno($id_alumno) ? "Se elimino profesor" : "No se pudo eliminar al alumno";
}
/****************************************************
 *
 *          P E N D I E N T E
 *
 *  CREAR CUENTA SERVICIO SOCIAL
 *
 * **************************************************/
function crearCuentaServSoc($id_alumno,$clave_acceso,
                            $fecha_inicio_serv,$fecha_termino_serv,
                            $notas,$permisos)
{
    include_once "../model/SERVICIO_SOCIAL.php";
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    $servSoc = new SERVICIO_SOCIAL();
    $servSoc->setIdAlumno($id_alumno);
    $servSoc->setClaveAcceso(md5($clave_acceso));
    $servSoc->setFechaInicioServ($fecha_inicio_serv);
    $servSoc->setFechaTerminoServ($fecha_termino_serv);
    $servSoc->setNotas($notas);
    $servSoc->setPermisos($permisos);
    $servSoc->setEstatus("1");
    $objAlum = $servSoc;
    //$res = $objAlum->
}
/****************************************************
 *
 *          P E N D I E N T E
 *
 *  CREAR CUENTA SERVICIO SOCIAL
 *
 * **************************************************/