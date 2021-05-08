<?php

function crearCuenta(){
    include_once "../model/ALUMNO.php";
    include_once "../model/CLAVES.php";

    //verificar si existe una cuenta

    $al = new ALUMNO();
    $clave = date("YmdHis");
    $al->setIdPersona($clave);
    $al->setNombre("Juan");
    $al->setApp("Ramirez");
    $al->setApm("Casas");
    $al->setTelefono("55986523145");
    $al->setSexo("1");
    $al->setEstatus("1");
    ///Crear alumno
    $al->setIdMunicipio("45");
    $al->setIdUniversidad("2");
    $al->setMatricula("45124578");
    $al->setNombreUni("UNIVERSIDAD NACIONAL AUTÓNOMA DE MEXICO");
    $al->setTipoProcedencia("1");
    $al->setCarreraEspecialidad("Informatica");
    $al->setEmail("correo@example.com");
    $al->setPw(md5("0000"));
    $al->setEstatusAlumno("1");

    $result = $al->registraPersona();
    if ($result){
        $res= $al->agregaAlumno();
        if ($res){
            echo "<h1>Guardamnos a ".$al->getNombreCompleto()."</h1>";
        }
    }
}

crearCuenta();