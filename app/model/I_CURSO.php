<?php


interface I_CURSO
{
    //regresa una lista de grupos del curso
    public function consultaGrupos($id_curso);

    public function consultaTemas($id_curso);

    public function consultaGroupKeys($id_curso);

    public function consultaDocsSolicitados($id_curso);

    function registraCurso($curso);

    function actualizaCurso($curso);

    function agregaTema($tema);

    function quitarTema($idTema);

    function actualizaTema($tema);

    function agregaKeywordGrupo($keyword);

    function quitarKerword($id_key,$id_curso);

    function agregaDocumentoSolicitado($documentoSolicitado);

    function quitarDocumetoSolicitado($id_doc_solicitado, $id_curso);

}