<?php
$filtro=$_POST['tipo'];
switch ($filtro){
    case "1":
        include_once "profesores_control.php";
        echo consultaListaProfesoresActivos();
        break;
    case "2":
        include_once "profesores_control.php";
        $id_profesor=$_POST['idprof'];
        echo consultarProfesor($id_profesor);
        break;
    default:
        include_once "profesores_control.php";
        echo consultaListaProfesores();
        break;
}
