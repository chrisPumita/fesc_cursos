<?php
// vista -> peticion -> control -> funcion buscaProfs -> conn db ->
// recurperar array -> convertir en JSON -> return vista

    //traer todos los administradores de la BD regresar una LS

    function consultaAdministradores(){
        //incluir el modelo de ADMIN
        include_once "../model/ADMIN.php";
        $objAdmin = new ADMIN();
        $resultados = $objAdmin -> getListaAdministradores(15);
        var_dump($resultados);
    }
    consultaAdministradores();


