<?php




/* ------------------DOCUMENTOS FUNCIONES----------------------- */
function creaDocumento($nombreDoc, $formato, $tipo, $pesoMax){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    /*`id_documento`,`nombre_doc`,`formato_admitido`,`tipo`,`peso_max_mb`,`estatus`*/
    $obj_doc->setNombreDoc($nombreDoc);
    $obj_doc->setFormatoAdmitido($formato);
    /*.jpg, .jpeg, .png, .pdf*/
    /* 0-> documento  1-> Identificacion 2-> Comprobante Pago -> 3 Contancia */
    $obj_doc->setTipo($tipo);
    $obj_doc->setPesoMaxMb($pesoMax);
    $obj_doc->setEstatusDocumento("1");
    return $obj_doc->crearDocumento() ? "Se guardarón datos de documento":"Error al guardar datos de documento";
}

function editaDocumento($id_documento,$nombre,$formato,$tipo,$pesomax,$estatus_doc){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    $obj_doc->setIdDocumento($id_documento);
    $obj_doc->setNombreDoc($nombre);
    $obj_doc->setFormatoAdmitido($formato);
    $obj_doc->setTipo($tipo);
    $obj_doc->setPesoMaxMb($pesomax);
    $obj_doc->setEstatusDocumento($estatus_doc);
    return $obj_doc->modificaDocumento() ? "Se actualizó el documento":"Error al actualizar documento";

}

function consultaDocumentos(){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    $result = $obj_doc->consultaDocumentos();
    $json_data = json_encode($result);
    return $json_data;
}

function borraDocumento($id_doc,$estado){
    include_once "../model/DOCUMENTO.php";
    $obj_doc = new DOCUMENTO();
    return $obj_doc->borrarDocumento($id_doc,$estado) ? "Se eliminó el documento":"Error al eliminar documento";
}
/* ------------------DOCUMENTOS SOLICITADOS FUNCIONES CURSO ----------------------- */

function agregaDocumentosol($id_documento,$idCurso,$obl){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    $obj_doc_sol->setIdDocumento($id_documento);
    $obj_doc_sol->setIdCursoFk($idCurso);
    $obj_doc_sol->setObligatorio($obl);
    return $obj_doc_sol->crearDocumentosSol() ? "Se agregó un documento al curso": "No pudimos agregar el documento";
}

function remueveDocumentoCurso($idDocSol){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    return $obj_doc_sol->eliminaDocumentoSolicitado($idDocSol) ? "Se removió el documento": "No pudimos remover el documento";
}

function consultaDocumentosDeCurso($idCurso){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    $result = $obj_doc_sol->consultarListaDocumentosSol($idCurso);
    $json_data = json_encode($result);
    return $json_data;
}

function modificaObligacionDocSol($id_doc_sol, $nuevoEdo){
    include_once "../model/DOCS_SOLICITADOS_CURSO.php";
    $obj_doc_sol = new DOCS_SOLICITADOS_CURSO();
    $obj_doc_sol->setIdDocSol($id_doc_sol);
    return $obj_doc_sol->cambiarOblig($nuevoEdo) ? "Se cambio el estado": "No pudimos cambiar el estado";
}
/* ------------------ARCHIVOS FUNCIONES QUE OCUPA INSCRIPCIONES----------------------- */

function consultarArchivo($id_inscripcion){
    include_once "../model/ARCHIVO.php";
     $obj_archivo = new ARCHIVO();
    $result=$obj_archivo->consultaArchivos($id_inscripcion);
    $json_data=json_encode($result);
    return $json_data;

}

function agregarArchivo($id_docSol,$idInscripcion,$codigoDoc,$nameArchivo,$nameFile,$path,$fehcaCreacion,$notas,$estadoRevision){
    include_once "../model/ARCHIVO.php";
    /*`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `codigo_doc`, `name_archivo`, `name_file_md5`, `path`, `fecha_creacion`, `notas`, `estado_revision`, `estado`*/
    $obj_archivo = new ARCHIVO();
    $obj_archivo->setIdDocSol($id_docSol);
    $obj_archivo->setIdInscripcionFk($idInscripcion);
    $obj_archivo->setCodigoDoc($codigoDoc );
    $obj_archivo->setNameArchivo($nameArchivo);
    $obj_archivo->setNameFileMd5($nameFile);
    $obj_archivo->setPath($path);
    $obj_archivo->setFechaCreacion($fehcaCreacion);
    $obj_archivo->setNotas($notas);
    $obj_archivo->setEstadoRevision($estadoRevision);
    $obj_archivo->setEstadoArchivo(1);
    return $obj_archivo->crearArchivo() ? "Se registró el archivo": "No pudimos registrar el archivo";
}

function editarArchivo($id_archivo,$id_docSol,$idInscripcion,$codigoDoc,$nameArchivo,$nameFile,$path,$fechaCreacion,$notas,$estadoRevision){
    include_once "../model/ARCHIVO.php";
    $obj_archivo = new ARCHIVO();
    $obj_archivo->setIdArchivo($id_archivo);
    $obj_archivo->setIdDocSol($id_docSol);
    $obj_archivo->setIdInscripcionFk($idInscripcion);
    $obj_archivo->setCodigoDoc($codigoDoc );
    $obj_archivo->setNameArchivo($nameArchivo);
    $obj_archivo->setNameFileMd5($nameFile);
    $obj_archivo->setPath($path);
    $obj_archivo->setFechaCreacion($fechaCreacion);
    $obj_archivo->setNotas($notas);
    $obj_archivo->setEstadoRevision($estadoRevision);
    return $obj_archivo->modificaArchivo() ? "Se modificó el archivo": "No pudimos modificár el archivo";
}

function eliminarArchivo($id_archivo){
    include_once "../model/ARCHIVO.php";
    $obj_archivo = new ARCHIVO();
    return $obj_archivo->eliminarArchivo($id_archivo) ? "Se eliminó el Archivo ":"Error al eliminar el Archivo";
}

function eliminarArchivoPath($path){
    include_once "../model/ARCHIVO.php";
    $obj_archivo= new ARCHIVO();
    return  $obj_archivo-> eliminaArchivoPath($path)  ? "Path eliminado" :"Error al eliminar el path";
}

//crear una carpeta en el repositorio de imagenes
// primero verifica si no hay una carpeta ya creada (nombre folder: noInsc(id)
//repositorios/c0c7c76d30bd3dcaefc96f40275bdc0a/c0c7c76d30bd3dcaefc96f40275bdc0a.pdf
//repositorios/c0c7c76d30bd3dcaefc96f40275bdc0a/c0c7c76d30bbhfd7daefc96f7gdfvv.pdf
function subirarchivo($nombreArchivo,$Archivo,$id_inscripcion){
    include_once "../model/ARCHIVO.php";
    $obj_archivo=new ARCHIVO();
    $obj_archivo->setIdInscripcionFk($id_inscripcion);
    //regresa la ruta del archivo
    return $obj_archivo->crearArchivoPath($nombreArchivo,$Archivo);
}

function ListaDocs(){
    include_once "../model/ARCHIVO.php";
    $obj_archivo=new ARCHIVO();
    $result=$obj_archivo->listaArchivos();
    $json_data=json_encode($result);
    return $json_data;
}

function modificaEstatusAr($id,$estatus){
    include_once "../model/ARCHIVO.php";
    $obj_archivo = new ARCHIVO();
    return $obj_archivo->modificaEstadoArchivo($id,$estatus) ;
}
