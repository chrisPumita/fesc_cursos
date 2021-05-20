    <?php

/*
include_once "../model/GRUPO.php";

$grupo = new GRUPO();
$resultado = $grupo->consultaGrupos(1);
var_dump($resultado);

*/

include_once "../model/CURSO.php";
include_once "../model/I_CURSO.php";
include_once "./curso_control.php";
include_once "../model/TEMAS.php";


    /*
    registraCurso("1","002","Macros en Excel",
                "Publico en general","Incursionar a las nuevas generaciones en las macros en excel",
            "En este curso en alumno aprenderá a etc, etc, etc","17",
        "Conocimientos basicos en excel","1300","https://www.google.com",
        "Imagen banner");
    */
/*
    actualizaCurso("2","2","1","001","Matematicas aplicadas",
                "Publico en general", "Objetivo","Descripcion","9",
            "Ningun antecedente","1","550","link del temario",
        "banner","0");
*/
/*
    agregarTema("2", "1.2", "Nombre de tema 7", "Resumen de tema 8");
*/
/*

       consultaTemas("2");
*/
/*
       eliminaTema("6");
*/
/*
       actualizaTema("8", "1.4", "Nombre Actualizado de Tema", "Resumen Actualizado de Tema");
*/

    $curso = new CURSO();
    $curso->setIdCurso("2");
    var_dump($curso->getListaTemas());



