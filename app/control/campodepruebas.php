<?php

/*
include_once "../model/GRUPO.php";

$grupo = new GRUPO();
$resultado = $grupo->consultaGrupos(1);
var_dump($resultado);

*/

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
remueveDocumentoCurso("2");