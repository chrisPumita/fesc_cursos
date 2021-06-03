<?php
//validar el catpcha

if (isset($_POST['no_trabajador'])
    && isset($_POST['id_depto'])
    && isset($_POST['email'])
    && isset($_POST['nombre'])
    && isset($_POST['app'])
    && isset($_POST['apm'])
    && isset($_POST['telefono']))
{
    include_once "./profesores_control.php";

    //declaro mis variables que enviare a la funcion
    // variables persona
    $nombre= $_POST['nombre'];
    $app= $_POST['app'];
    $apm= $_POST['apm'];
    $telefono= $_POST['telefono'];
    $sexo = $_POST['sexo'];
    // variables Profesor
    $id_depto = $_POST['id_depto'];
    $no_trabajador = $_POST['no_trabajador'];
    $prefijo= $_POST['prefijo'];
    $email= $_POST['email'];

    if(crearCuentaProfesor($nombre,$app,$apm,$telefono,$sexo,$id_depto,
                            $no_trabajador,$prefijo,$email)){
        echo "Felicidades ".$nombre.", tu cuenta se ha registrado de forma exitosa.";
    }
    else{
        echo "Ocurrio un error";
    }
    }
    else{
        echo "Faltan datos del profesor";
    }



