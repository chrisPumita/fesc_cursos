<?php


interface I_DOCUMENTOS
{
    function consultaDocumentos();

    function modificaDocumento($documento);

    function crearDocumento($documento);

    // DELETE, id * -1 , estatus 0;
    function borrarDocumento($idDocumento);

}