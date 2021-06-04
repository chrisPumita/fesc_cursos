<?php
include_once "../model/ALUMNO.php";

function consultaListaAlumnos()
{
    include_once "../model/ALUMNO.php";
    $objAlumn = new ALUMNO();
    $result = $objAlumn->consultaListaAlumnos();
    $json_data = json_encode($result);
    return $json_data;
}
function crearCuentaAlumno($id_municipio, $id_universidad,$matricula,$nombre_uni,$idProcedencia,
                     $carrera_especialidad,$email,$pw,$nombre,$app,$apm,$telefono,$sexo){
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

function updateEstatus($id,$status){
    include_once "../model/ALUMNO.php";
    $objAlum = new ALUMNO();
    return $objAlum->updateEstatusAlumno($id,$status);
}

function consultaAlumnos(){
    $al = new ALUMNO();
    $result = $al ->consultaAlumnos("0","0");
    $json_data = json_encode($result);
    return $json_data;
}


