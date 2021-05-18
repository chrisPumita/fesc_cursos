<?php


interface I_DOCS_SOLICITADOS
{
    function consultarListaDocumentos($id_curso);
    function crearDocumentos();

    function eliminaDocumentoSolicitado($id_documento_sol);
    function cambiarOblig($id_documento_sol,$estatus);

}