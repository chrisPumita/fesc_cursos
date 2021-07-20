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
    case "3":
        include_once "profesores_control.php";
        $filtro2=$_POST['estatus'];
        echo listaprofesores($filtro2);
        break;
    default:
        include_once "profesores_control.php";
        $filtro2=$_POST['estatus'];
        echo listaProfesores($filtro2);
        break;
}
