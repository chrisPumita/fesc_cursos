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

/*registraCurso("1","002","Macros en Excel",
            "Publico en general","Incursionar a las nuevas generaciones en las macros en excel",
        "En este curso en alumno aprenderá a etc, etc, etc","17",
    "Conocimientos basicos en excel","1300","https://www.google.com",
    "Imagen banner");

actualizaCurso("1","1","2","001","Induccion al computo",
            "Publico en general", "Objetivo","Descripcion","9",
        "Ningun antecedente","1","550","link del temario",
    "banner","0");*/
/*  agregarTema("2", "indice de tema 5", "Nombre de tema 5", "Resumen de tema5");
    consultaTemas("1");
    eliminaTema("5");
    actualizaTema("4", "1", "Indice Tema Actualizado", "Nombre Actualizado de Tema", "Resumen Actualizado de Tema");*/

function agregaDocumentosol($idCurso){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    $obj_doc_sol->setIdDocumento("4");
    $obj_doc_sol->setIdCursoFk($idCurso);
    $obj_doc_sol->setObligatorio("1");

    echo $obj_doc_sol->crearDocumentosSol() ? "Se agregó un documento al curso": "No pudimos agregar el documento";
}

function remueveDocumentoCurso($idDocSol){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    echo $obj_doc_sol->eliminaDocumentoSolicitado($idDocSol) ? "Se removió el documento": "No pudimos remover el documento";
}

function consultaDocumentosDeCurso($idCurso){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    $result = $obj_doc_sol->consultarListaDocumentosSol($idCurso);
    $json_data = json_encode($result);
    echo $json_data;
}
//remueveDocumentoCurso("2");
