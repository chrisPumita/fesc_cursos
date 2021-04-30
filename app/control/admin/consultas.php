<?php
    include("../../model/ALUMNO.php");
    $a = new ALUMNO();
    $a->setNombre("Juan");
    $a->setApp("Contreras");
    $a->setApm("Curiel");
    $a ->setMatricula("6875469");
    $name = $a->getNombreCompleto();
    echo "Mi nombre es ".$name." y mi matricula es ".$a->getMatricula()."<br>";
    $a ->connect();
    $resultado = $a->getData("SELECT * FROM `universidades`");
    $a->close();
    var_dump($resultado);

    //print_r(PDO::getAvailableDrivers());
//Modelo <-> Control <-> vista