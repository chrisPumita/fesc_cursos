<?php


interface I_DOCS_SOLICITADOS
{
    function consultarListaDocumentos($id_curso);
    function crearDocumentos();
    /* 4docs
     * INSERT INTO `documento` (`id_documento`, `nombre_doc`, `formato_admitido`, `tipo`, `peso_max_mb`, `estatus`)
     * VALUES
     * (NULL, 'doc', 'dc', '1', '20', '1'),
     * (NULL, '1', '2', '2', '1', '2'),
     * (NULL, 'doc', 'dc', '1', '20', '1'),
     * (NULL, '1', '2', '2', '1', '2');
     * */
    function eliminaDocumentoSolicitado($id_documento_sol);
    function cambiarOblig($id_documento_sol,$estatus);

}