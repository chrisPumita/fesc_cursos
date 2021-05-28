<?php
//validar el catpcha
if (isset($_POST['matricula'])
    && isset($_POST['idProcedencia'])
    && isset($_POST['carrera'])
    && isset($_POST['email'])
    && isset($_POST['pw1'])
    && isset($_POST['nombre'])
    && isset($_POST['app'])
    && isset($_POST['apm'])
    && isset($_POST['telefono']))
{
    include_once "./alumno_control.php";

    //declaro mis variables que enviare a la funcion
    $id_municipio = $_POST['id_mun'];
    $id_universidad = $_POST['id_uni'];
    $matricula = $_POST['matricula'];
    $nombre_uni= $_POST['nombre_uni'];
    $id_procedencia= $_POST['idProcedencia'];
    $carrera_especialidad= $_POST['carrera'];
    $email= $_POST['email'];
    $pw= $_POST['pw1'];
    $nombre= $_POST['nombre'];
    $app= $_POST['app'];
    $apm= $_POST['apm'];
    $telefono= $_POST['telefono'];
    $sexo = $_POST['sexo'];

    if(crearCuentaAlumno($id_municipio,$id_universidad,$matricula,
        $nombre_uni,$id_procedencia,$carrera_especialidad,
        $email,$pw,$nombre,$app,$apm,$telefono,$sexo)){
        echo "Felicidades ".$nombre.", tu cuenta se ha registrado de forma exitosa.";
    }
    else{
        echo "Ocurrio un error";
    }
}
else{
    echo "Faltan datos del alumno";
}