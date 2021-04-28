<?php
    include_once("../../model/admin/ADMIN.php");
    $a = new ADMIN();
    $a->setNombre("Juan");
    $a->setApp("Contreras");
    $a->setApm("Curiel");
    echo $a->getNombreCompleto();