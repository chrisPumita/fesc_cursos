<?php
    include("../../model/ADMIN.php");
    $a = new ADMIN();
    $a->setNombre("Juan");
    $a->setApp("Contreras");
    $a->setApm("Curiel");
    $name = $a->getNombreCompleto();
    echo "Mi nombre es ".$name;

    $a ->connect();
    $resultado = $a->getData("SELECT * FROM `universidades`");
    $a->close();
    var_dump($resultado);

    //print_r(PDO::getAvailableDrivers());
//Modelo <-> Control <-> vista