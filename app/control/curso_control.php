<?php
include_once "../model/CURSO.php";
include_once "../model/TEMAS.php";

function consultaListaCursos($estado_filtro,$id_Curso){
    include_once "../model/CURSO.php";
    $obj_curso= new CURSO();
    $result=$obj_curso->consultaCursos($estado_filtro,$id_Curso);
    $json_data= json_encode($result);
    return $json_data;
}
function registraCurso( $id_profesor_autor, $codigo_curso, $nombre_curso, $dirigido_a,
                        $objetivo_curso, $descripcion_curso, $no_sesiones, $antecedentes_curso,
                        $costo_sugerido_curso, $link_temario_curso, $bannerImg_curso)
{
    $curso = new CURSO();
    $key = date('YmdHis');
    $curso->setIdCurso($key);
    $curso->setIdProfesorAutor($id_profesor_autor);
    $curso->setCodigo($codigo_curso);
    $curso->setNombreCurso($nombre_curso);
    $curso->setDirigidoA($dirigido_a);
    $curso->setObjetivo($objetivo_curso);
    $curso->setDescripcion($descripcion_curso);
    $curso->setNoSesiones($no_sesiones);
    $curso->setAntecedentes($antecedentes_curso);
    $curso->setCostoSugerido($costo_sugerido_curso);
    $curso->setLinkTemarioPdf($link_temario_curso);
    $curso->setBannerImg($bannerImg_curso);
    $curso->setTipoCurso("1");

    echo $curso->registraCurso() ? "Se registro un curso" : "No se pudo registrar el curso";
}

function actualizaCurso($id_curso, $id_profesor_admin_acredita, $id_profesor_autor, $codigo_curso, $nombre_curso,
                        $dirigido_a, $objetivo_curso, $descripcion_curso, $no_sesiones, $antecedentes_curso,
                        $aprobado, $costo_sugerido_curso, $link_temario_curso, $bannerImg_curso, $tipo_curso)
{
    $curso = new CURSO();
    $curso ->setIdCurso($id_curso);
    $curso ->setIdProfesorAdminAcredita($id_profesor_admin_acredita);
    $curso ->setIdProfesorAutor($id_profesor_autor);
    $curso ->setCodigo($codigo_curso);
    $curso ->setNombreCurso($nombre_curso);
    $curso ->setDirigidoA($dirigido_a);
    $curso ->setObjetivo($objetivo_curso);
    $curso ->setDescripcion($descripcion_curso);
    $curso ->setNoSesiones($no_sesiones);
    $curso ->setAntecedentes($antecedentes_curso);
    $curso ->setAprobado($aprobado);
    $curso ->setCostoSugerido($costo_sugerido_curso);
    $curso ->setLinkTemarioPdf($link_temario_curso);
    $curso ->setBannerImg($bannerImg_curso);
    $curso ->setTipoCurso($tipo_curso);

    echo $curso->actualizaCurso($curso) ? "Se actualizo un curso" : "No se pudo actualizar el curso";
}

function agregarTema($id_curso_fk,$indice,$nombre,$resumen)
{
    $tema = new TEMAS();
    $tema ->setIdCursoFk($id_curso_fk);
    $tema ->setIndice($indice);
    $tema ->setNombre($nombre);
    $tema->setResumen($resumen);

    echo $tema->agregaTema($tema) ? "Se agrego un tema" : "No se pudo agregar el tema";
}

function consultaTemas($id_curso_fk)
{
    $temas = new TEMAS();
    $result = $temas->consultaTemas($id_curso_fk);
    $json_data = json_encode($result);
    echo $json_data;
}

function eliminaTema($idTema)
{
    $tema = new TEMAS();
    echo $tema->quitarTema($idTema) ? "Se elimino un tema" : "No se pudo eliminar el tema";
}

//No es necesario enviar el valor del id_curso pùesto que tenemos el id del tema ya como dato
function actualizaTema($id_tema,$indice,$nombre,$resumen)
{
    $tema = new TEMAS();
    $tema ->setIdTema($id_tema);
    $tema ->setIndice($indice);
    $tema ->setNombre($nombre);
    $tema -> setResumen($resumen);

    echo $tema->actualizaTema() ? "Se actualizo un tema" : "No se pudo actualizar el tema";
}

//
//* OTRAS FUNCIONES ADICIONALES*/
function agregaDocumentoAlCurso($id_doc,$idCurso,$obl){
    require_once "./documentos_control.php";
    return agregaDocumentoSol($id_doc,$idCurso,$obl);
}

function consultaDumentacion($id_curso){
    require_once "./documentos_control.php";
    return consultaDocumentosDeCurso($id_curso);
}

function quitarDocumentoCurso($idDocSol){
    require_once "./documentos_control.php";
    return remueveDocumentoCurso($idDocSol);
}

function cambiaObligacion($idDocSol,$estatus){
    require_once "./documentos_control.php";
    return modificaObligacionDocSol($idDocSol,$estatus);
}