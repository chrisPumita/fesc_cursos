<?php


interface I_CURSO
{
    //regresa una lista de grupos del curso
    public function consultaGrupos($id_curso);

    public function consultaGroupKeys($id_curso);

    public function consultaDocsSolicitados($id_curso);

    function registraCurso();

    function actualizaCurso($curso);

    function agregaKeywordGrupo($keyword);

    function quitarKeyword($id_key,$id_curso);

    function agregaDocumentoSolicitado($documentoSolicitado);

    function quitarDocumetoSolicitado($id_doc_solicitado, $id_curso);

}