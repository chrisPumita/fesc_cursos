<?php
// vista -> peticion -> control -> funcion buscaProfs -> conn db ->
// recurperar array -> convertir en JSON -> return vista

    //traer todos los administradores de la BD regresar una LS

    function consultaAdministradores(){
        //incluir el modelo de ADMIN
        include_once "../model/ADMIN.php";
        $objAdmin = new ADMIN();
        $result = $objAdmin -> getListaAdministradores(1);
        $json_data = json_encode($result);
        return $json_data;
    }

    function cambiaEstatusAdmin($idAdmin,$statusActual){
        include_once "../model/ADMIN.php";
       // return ADMIN::updateStatusAdmin($idAdmin,$statusActual);
        $objAdmin = new ADMIN();
        return $objAdmin->updateStatusAdmin($idAdmin,$statusActual=="1"?"0":"1");
    }
function consultaAdministrador($id_admin){
    //incluir el modelo de ADMIN
    include_once "../model/ADMIN.php";
    $objAdmin = new ADMIN();
    $result = $objAdmin -> buscaCuentaAdmin($id_admin);
    $json_data = json_encode($result);
    return $json_data;
}

