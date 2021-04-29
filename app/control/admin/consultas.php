<?php
    include("../../model/ADMIN.php");
    $a = new ADMIN();
    $a->setNombre("Juan");
    $a->setApp("Contreras");
    $a->setApm("Curiel");
    $name = $a->getNombreCompleto();
    echo "Mi nombre es ".$name;
    //print_r(PDO::getAvailableDrivers());
//Modelo <-> Control <-> vista